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
			<form action="php2.php" method="post">
       <?php 
       	 	$num=0;
       	 	$numero=$_POST["numero"];
       	 	do{
	         	$numero = floor($numero / 10);
	          	$num = $num + 1;
				} while ($numero > 0);
				echo " Su numero tiene " . $num . " digitos";
		 ?>
			</form>
		</fieldset>
	</body>
</html>