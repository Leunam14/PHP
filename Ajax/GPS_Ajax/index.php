<?php

require_once("db.php");

$usar_db = new DBControl();

$conn = $usar_db->conectarDB();

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <script src="./js/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="./css/mio.css" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script src="https://unpkg.com/esri-leaflet@2.0.8"></script>
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css" />
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4"></script>
    <style>
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
        }

        .bigicon {
            font-size: 35px;
            color: #36A0FF;
        }
    </style>

</head>

<body>
    <div id="Izq">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="p-2"><img src="./img/logo.png" width="80" class="rounded" alt="IES La Puebla"></div>
                <div class="p-2">
                    <legend class="text-center header display-4"><b>Pedidos La Puebla</b></legend>
                </div>
            </div>

            <form class="form-horizontal" id="formu" action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <h6>Datos del comprador</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">

                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col input-group-prepend">
                                                <div class="col input-group-text">
                                                    <span class="text-center"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input id="A0" name="A0" type="text" placeholder="Nombre" class="form-control">

                                                <div class="col input-group-text">
                                                    <span class="text-center"><i class="fa fa-user"></i></span>
                                                </div>
                                                <input id="A1" name="A1" type="text" placeholder="Apellidos" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col input-group-prepend">
                                                <div class="col input-group-text">
                                                    <span class="text-center"><i class="fa fa-list"></i></span>
                                                </div>
                                                <input id="A2" name="A2" type="number" placeholder="Cantidad" class="form-control" size="50">

                                                <div class="col input-group-text">
                                                    <span class="text-center"><i class="fa fa-phone"></i></span>
                                                </div>
                                                <input id="A3" name="A3" type="tel" placeholder="Telefono de Contacto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col input-group-prepend">
                                                <div class="col input-group-text">
                                                    <span class="text-center"><i class="fa fa-map-marked"></i></span>
                                                </div>
                                                <input id="A4" name="A4" type="text" placeholder="Dirección" class="form-control">
                                                <button type="button" id="buscar" class="btn btn-primary btn-sm">O</button><br>

                                            </div>

                                            <center>
                                                <div id="map"></div>
                                            </center>
                                            <script>
                                                $(document).ready(function() {

                                                    $("#buscar").click(function() {

                                                        $("#map").slideToggle();

                                                    });

                                                });
                                            </script>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>Descripción del producto</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class="text-center"><i class="fa fa-align-left"></i></span>
                                            </div>

                                            <input id="A00" name="A00" type="text" placeholder="Descripcion" class="form-control">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group" id="b">
                    <br>
                    <div class="text-center">
                        <button type="submit" id="enviar-btn" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>
                </fieldset>
            </form>


        </div>
    </div>

    <script type="text/javascript">
        
        $("#enviar-btn").click(function() {
                    //Obtenemos el valor del campo nombre
                    var nombre = $("input#A0").val();
                    var nombre1 = document.querySelector("#A0").value;

                    //Validamos el campo nombre, simplemente miramos que no esté vacío
                    if (nombre == "") {
                        $("input#A0").focus();
                        $("<div id='message'><h4>Falta el nombre</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);

                        return false;
                    }

                    //Obtenemos el valor del campo apellidos
                    var apellidos = $("input#A1").val();
                    var apellidos1 = document.querySelector("#A1").value;

                    //Validamos el campo apellidos, simplemente miramos que no esté vacío
                    if (apellidos == "") {
                        $("input#A1").focus();
                        $("<div id='message'><h4>Falta el apellido</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);
                        return false;
                    }

                    //Obtenemos el valor del campo cantidad
                    var cantidad = $("input#A2").val();
                    var cantidad1 = document.querySelector("#A2").value;

                    //Validamos el campo cantidad, simplemente miramos que no esté vacío
                    if (cantidad == "") {
                        $("input#A2").focus();
                        $("<div id='message'><h4>Falta la cantidad</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);
                        return false;
                    }

                    //Obtenemos el valor del campo telefono
                    var telefono = $("input#A3").val();
                    var telefono1 = document.querySelector("#A3").value;

                    //Validamos el campo telefono, simplemente miramos que no esté vacío
                    if (telefono == "") {
                        $("input#A3").focus();
                        $("<div id='message'><h4>Falta el teléfono</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);
                        return false;
                    }

                    //Obtenemos el valor del campo direccion
                    var direccion = $("input#A4").val();
                    var direccion1 = document.querySelector("#A4").value;

                    //Validamos el campo direccion, simplemente miramos que no esté vacío
                    if (direccion == "") {
                        $("input#A4").focus();
                        $("<div id='message'><h4>Falta la dirección</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);

                        return false;
                    }

                    //Obtenemos el valor del campo descripcion
                    var descripcion = $("input#A00").val();
                    var descripcion1 = document.querySelector("#A00").value;

                    //Validamos el campo descripcion, simplemente miramos que no esté vacío
                    if (descripcion == "") {
                        $("input#A00").focus();
                        $("<div id='message'><h4>Falta la descripción</h4></div>").insertAfter("#b");
                        $("#message").fadeOut(5000);
                        return false;
                    }

                    //Construimos la variable que se guardará en el data del Ajax para pasar al archivo php que procesará los datos
                    //var datos = $(this).serialize();
                    /*var datos = {nombre:nombre,
                                apellidos:apellidos,
                                cantidad:cantidad,
                                telefono:telefono,
                                direccion:direccion,
                                descripcion:descripcion}*/

                    
                    /* $.ajax({
                        type: "post",
                        url: "cambios_php.php",
                        data: {
                            nombre:nombre1,
                            apellido:apellido1,
                            cantidad:cantidad1,
                            telefono:telefono1,
                            direccion:direccion1,
                            descripcion:descripcion1
                        
                        },    
                        success: function(response) {
                            if(response == "1" || response == 1) {
                           
                        }
                            $("#Der").html(data);
                            console.log(data);

                            
                        }
                        error: function(err) {
                        console.error(err)
                        }
                    }); */
        })

    </script>

    <div id="Der">

    </div>
    <script src="./js/mio.js"></script>
</body>

</html>