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
			<form action="php1.php" method="post">
			<?php 
       	 	$numero=$_POST["numero"];
       	 	if($numero>0){
       	 		echo "el numero ingresado es positivo";
       	 	}else if($numero<0){
       	 		echo "el numero ingresado es negativo";
       	 	}else if($numero==0){
       	 		echo "el numero ingresado es cero";
       	 	}
			?>
			</form>
		</fieldset>
	</body>
</html>