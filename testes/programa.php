<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta HTTP-EQUIV='refresh' CONTENT='1;URL=programa.php'>
	<title>Programa</title>
</head>
<body>
<?php
	$hora =  date('H:m:s');

	/*Teste*/
	$minutos = date('m');
	echo "<br/>$minutos";

	/*Fim teste*/

	echo "$hora";

	if ($hora >= 0 && $hora < 12) {
		echo "<br/>Turno da manhã";
	}
	else if ($hora >= 12 && $hora < 18 ) {
		echo "<br/> Turno da tarde";
	} elseif ($hora >= 18 && $hora <= 23) {
		echo "<br/> Turno da noite";
	}

?>
</body>
</html>