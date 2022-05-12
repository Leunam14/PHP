function cargar_ajax() {

    setTimeout(() => {
        var selector_equipo = document.querySelector("#equipo");
        var dorsal = document.querySelector("#dorsal").value;
        var contenedor_datos = document.querySelector("#Izq");
        selector_equipo.onchange = (e) => {
            var nuevo_valor = e.target.value;
            $.ajax({
                type: "post",
                url: "modi.php",
                data: {
                    dorsal: dorsal,
                    equipo: nuevo_valor
                },
                success: function (response) {
                    if(response == "1" || response == 1) {
                        cargar("#Izq", "izquierdo.php");
                    }
                },
                error: function(err) {
                    console.error(err)
                }
            });
        }
    }, 1000)
    
}

cargar_ajax();