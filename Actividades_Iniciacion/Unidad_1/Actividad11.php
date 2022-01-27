<!DOCTYPE html> <html lang="es">  
 <head>  
  <meta charset="utf-8">  
  <title>Actividad 11</title>  
 </head>  
 <body>  
  <h1>Calcular letra que corresponde al DNI</h1>  
  <form action="dni.php" method="post">  
   <p>  
    Introduce el número del DNI  
   </p>  
   <p>  
    <label for="ndni">Número: </label>  
    <input type="number" name="ndni" min="1" max="99999999">  
   </p>  
   <p>  
    <input type="submit" value="Enviar datos" name="enviar">  
   </p>  
  </form>  
 </body>  
 </html>  