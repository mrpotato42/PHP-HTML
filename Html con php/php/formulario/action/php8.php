<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>php</title>
		<link rel="stylesheet" type="text/css" href="../../Reset.css">
		<link rel="stylesheet" type="text/css" href="../../est.css">
	</head>
	<body>
		<fieldset>
			<form action="php8.php" method="post">
			<?php
			$b=$_REQUEST["base"];
			$h=$_REQUEST["altura"];
			$area =($b*$h)/2;
			echo "El area del triangulo es: ".$area;
			?>
			</form>
		</fieldset>
	</body>
</html>