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
			<form action="php10.php" method="post">
			<?php
			$nom1= $_POST["nomb1"];
			$nom2= $_POST["nomb2"];
			$nom3= $_POST["nomb3"];
			$nom4= $_POST["nomb4"];
			$nom5= $_POST["nomb5"];
			$sexo1= $_POST["sx1"];
			$sexo2= $_POST["sx2"];
			$sexo3= $_POST["sx3"];
			$sexo4= $_POST["sx4"];
			$sexo5= $_POST["sx5"];
			$arrayNombre = array($nom1,$nom2,$nom3,$nom4,$nom5);
			$arraySexo = array($sexo1,$sexo2,$sexo3,$sexo4,$sexo5);
			$hombre="";
			$mujer="";
			for ($i=0; $i < count($arrayNombre) ; $i++) {
			  if ($arraySexo[$i]=="F") {
			    $mujer=$mujer.$arrayNombre[$i]."<br>";
			  }else {
			    $hombre=$hombre.$arrayNombre[$i]."<br>";
			  }
			}
			echo "<b>Hombres:</b> <br>". $hombre."<br>";
			echo "<b>Mujeres:</b> <br>". $mujer;
			?>
			</form>
		</fieldset>
	</body>
</html>