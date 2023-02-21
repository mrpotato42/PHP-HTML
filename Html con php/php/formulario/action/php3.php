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
			<form action="php3.php" method="post">
			    <?php   	 	
			    	$n1=$_POST["numero1"];
			       	$n2=$_POST["numero2"];
			       	$n3=$_POST["numero3"];
			    	If($n1 > $n2){
						If($n1 > $n3){
							echo 'numero ' . $n1 . ' es mayor';
						} else {
							echo 'numero ' . $n3 . ' es mayor';
						}
					} else {
						If($n2 > $n3){
							echo 'numero ' . $n2 . ' es mayor';
						} else {
							echo 'numero ' . $n3 . ' es mayor';
						}
					}
				?>
			</form>
		</fieldset>
	</body>
</html>