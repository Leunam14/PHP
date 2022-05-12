function cargar(div, desde){$(div).load(desde);}
var map = L.map('map', {
    zoomDelta: 0.25,
    zoomSnap: 0
});
var marker_actual;       
var browserLat;
var browserLong;  
var direccion;
var circulo;
var Icon = L.icon({
    iconUrl: './img/alb2.png',
    iconSize:     [38, 50], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 50], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [22,-50] // point from which the popup should open relative to the iconAnchor
});
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',maxZoom: 18}).addTo(map);


map.locate({setView: true, maxZoom: 18});

function onLocationFound(e) {
 var radius = e.accuracy / 2;
 var geocodeService = L.esri.Geocoding.geocodeService();
 geocodeService.reverse().latlng(e.latlng).run(function(error, result) {
        console.log(result);
        let dir = document.getElementById('A4');
        dir.value = result.address.Match_addr;
        direccion= result.address.Match_addr;
        marker_actual=L.marker(e.latlng,{icon: Icon}).addTo(map);
        marker_actual.bindPopup(`Estas aquí, con ${radius} metros de aproximación: ${direccion} `).openPopup();
        circulo=L.circle(e.latlng, radius);
        circulo.addTo(map);
        
             
    });
 }
 
 function onLocationError(e) {
 alert(e.message);
}

    
 map.on('locationfound', onLocationFound);
 map.on('locationerror', onLocationError);


 $('#buscar').on('click',function(){
    let dir2 = document.getElementById('A4'); 
    var direc=dir2.value;
    L.esri.Geocoding.geocode({
        requestParams: {
          maxLocations: 1
        }
      })
        .text(direc)
        .run(function(error, results, response) {
          var mlat=results.results[0].latlng.lat;
          var mlon=results.results[0].latlng.lng;
          var radius2 = 10;
          map.setView([mlat,mlon], 18);
          marker_actual=L.marker([mlat,mlon],{icon: Icon}).addTo(map);
          marker_actual.bindPopup(`Estas aquí, con ${radius2} metros de aproximación: ${direc} `).openPopup();
          circulo=L.circle([mlat,mlon], radius2);
          circulo.addTo(map);
        });  
    });