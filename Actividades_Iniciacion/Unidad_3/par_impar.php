<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php


	for($i=1;$i<=100;$i++){
		if($i%2==0){
			par($i);
		}else{
			impar($i);
		}
	}
	

function par($i){
		echo "<br><b>$i</b>";
}
	
function impar($i){
	echo "<br>$i";
}	
	
	

	
?>



</body>
</html>