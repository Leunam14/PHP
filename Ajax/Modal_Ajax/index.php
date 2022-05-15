<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    
	<script src="jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="index.js"></script>
    
    <!-- javascrip para rellenar los div izquierdo y derecho con contenido -->
	<script>
        function cargar(div, desde)
        {
            $(div).load(desde);
            cargar_ajax();
        }
    </script>
	<!-- Estilos para dividir la pantalla en dos Marcos de 50% y 40% -->
	<style>
            #Izq{
                display: table-cell;
                float:left;
                border: 2px solid blue;
                border-radius: 5px;
                width: 40%;
                height: 100%;             
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                background-color: #71A2E8;
                text-align: center;
                padding-left: 140px;
            }
            #Der{
                display: table-cell;
                float:right;
                width: 50%;
                height: 100%;
                border: 2px solid purple;
                border-radius: 5px;
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                background-color: #A598CD;
            }
            
            #formuciclista{
                text-align: center;
                margin-bottom: 10px;
            }
     </style>
</head>
<body>	
    <!-- Creo los dos div --> 
	<div id="Izq"></div>
	<div id="Der"></div>
    <!-- Los cargo con contenido -->
    <script type="text/javascript">
        cargar('#Izq','izquierdo.php');
        // cargar('#Der','derecho.php');
    </script>
</body>
</html>