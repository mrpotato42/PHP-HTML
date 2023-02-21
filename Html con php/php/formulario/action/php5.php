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
			<form action="php5.php" method="post">
				<?php 
                    $nomb=$_POST["nombre"];
                    $n1=$_POST["nota1"];
                    $n2=$_POST["nota2"];
                    $n3=$_POST["nota3"];
                    $prom=($n1+$n2+$n3)/3;
                    if ($n1<0 or $n1>5) {
                        echo "repita nuevamente";
                    }else if ($n2<0 or $n2>5) {
                        echo "repita nuevamente";
                    }else if ($n3<0 or $n3>5) {
                        echo "repita nuevamente";
                    }
                    if($prom>=3.5){
                        echo "el estudiante " .$nomb. " Aprobo";
                    }else if($prom<3.5){
                        echo "el estudiante " .$nomb. " Reprobo";
                    }
                ?>
			</form>
		</fieldset>
	</body>
</html>