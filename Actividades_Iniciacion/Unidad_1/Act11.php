
  <?php

	  $num = $_POST['dni'];
	  $resto = $num%23;
	  $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
	  echo "El DNI completo es " . $num . $letras[$resto];

  ?>
