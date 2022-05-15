function cargar_ajax() {

    /* SetTimeout lo puse porque me daba error al cargar la parte derecha, ya que lo hacía a la vez.
    Le puse  un valor de 1000 milisegundos para que no hiciera colisión con la carga, es decir, que se cargara
    primero uno, y despues la otra, pero con la modal ya no haría falta en verdad */

    setTimeout(() => {
        
        // var selector_equipo = document.querySelector("#equipo");
        // var dorsal = document.querySelector("#dorsal").value;
        // var contenedor_datos = document.querySelector("#Izq");
        // selector_equipo.onchange = (e) => {
        //     var nuevo_valor = e.target.value;
        //     $.ajax({
        //         type: "post",
        //         url: "modi.php",
        //         data: {
        //             dorsal: dorsal,
        //             equipo: nuevo_valor
        //         },
        //         success: function (response) {
        //             if(response == "1" || response == 1) {
        //                 cargar("#Izq", "izquierdo.php");
        //             }
        //         },
        //         error: function(err) {
        //             console.error(err)
        //         }
        //     });
        // }

        const dorsales = document.querySelectorAll("a.enlaceDorsal");

        dorsales.forEach(dorsal => {
            dorsal.onclick = (e) => {
                const valor = parseInt(e.target.innerText);
                var equipos = []

                $.ajax({
                    type: "get",
                    url: "getEquipos.php",
                    success: function (res) {
                        equipos = JSON.parse(res);
                    }
                });



                $.ajax({
                    type: "get",
                    url: "getCiclista.php",
                    data: {
                        dorsal: valor
                    },
                    success: function (res) {
                        /* Pasear a json, si no lo pasas el resultado viene como string y 
                        los indices lo que hacen es coger las letras en esa posición */

                        res = JSON.parse(res);

                        var dorsal = res[0];
                        var nombre = res[1];
                        var edad = res[2];
                        var equipo = res[3];

                        /**Forma muy cómoda de hacer la modal */
                        Swal.fire({
                            title: '<strong>Actualiza los datos</strong>',
                            icon: 'info',
                            html: `
                                <form id="formuciclista" action="modi.php" method="post">
                                    <div>
                                    <input type="hidden" name="dorsal" id="dorsal" value="${dorsal}"/><br/><br/> 
                                    Nombre: <input type="text" name="nombre" id="nombre" value="${nombre}"/><br/><br/>
                                    
                                    Edad:   <input type="text" name="edad" id="edad" value="${edad}"/><br/><br/> 
                                    Equipo: <select name="equipo" id="equipo">
                                    <?php
                                        echo '<option selected value="${equipo}">${equipo}</option>';

                                        <!-- Foreach devuelve los elementos del array en forma de variable
                                            mientras que map los imprime directamente al hacer el return
                                        -->
                                        ${equipos.map((equipo, index) => {
                                return `
                                                <option value="${equipo.nomeq}">${equipo.nomeq}</option>
                                            `
                            })}

                                    </select><br/><br/> 
                                    <!-- <button type="submit">Enviar</button> -->
                                    </div>
                                </form>
                            ` ,
                            showCloseButton: true,
                            showCancelButton: true,
                            focusConfirm: false,
                            confirmButtonText:
                                'Aceptar',
                            cancelButtonText:
                                'Cancelar',
                        })

                        const boton_aceptar = document.querySelector(".swal2-confirm");
                        boton_aceptar.onclick = (e) => {
                            var equipo = document.getElementById("equipo").value;
                            
                                $.ajax({
                                    type: "post",
                                    url: "modi.php",
                                    data: {
                                        dorsal: dorsal,
                                        equipo
                                    },
                                    success: function (response) {
                                        if(response == "1" || response == 1) {
                                            Swal.close()
                                            cargar("#Izq", "izquierdo.php");
                                        }
                                    },
                                    error: function(err) {
                                        console.error(err)
                                    }
                                });





                        }
                    }
                });



            }
        })




    }, 1000)

}

cargar_ajax();
