
<?php
	//if (isset($_POST['submit'])) {
		
		$valor1 = $_POST['num1'];
		$valor2 = $_POST['num2'];
		$valor3 = $_POST['num3'];

		$valores = array($valor1,$valor2,$valor3);

		sort($valores);

		$totalnum = count($valores);

		for($i=0; $i< $totalnum; $i++){

			echo "$valores[$i]<br>";
		}
	
?>
