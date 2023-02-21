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
			<form action="php7.php" method="post">
				<?php
					$t=$_POST["tabla"];
					$i=0;
					while ($i < 10) {
						$res= ($i+1) * $t;
						echo $t. " * " . ($i+1) . " = " .$res."<br>";
						$i++;
					}
				?>
			</form>
		</fieldset>
	</body>
</html>