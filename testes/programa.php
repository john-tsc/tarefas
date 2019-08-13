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
	$minuto = date('m');
	$segundo = date('s');
	/*Teste
	
	echo "$minutos<br/>";

	Fim teste*/

	echo "$hora";

	if ($hora >= 0 && $hora < 12) {
		echo "<br/>Turno da manhã";
	}
	else if ($hora >= 12 && $hora < 18 ) {
		echo "<br/> Turno da tarde";
	} else if ($hora >= 18 && $hora <= 23 && $minuto <= 59 && $segundo <= 59) {
		echo "<br/> Turno da noite";
	}

?>
</body>
</html>