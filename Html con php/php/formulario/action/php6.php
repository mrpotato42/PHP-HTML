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
			<form action="php6.php" method="post">
				<?php 
                    $pren=$_POST["prendas"];
                    $tot=0;
                    $neto;
                    $tot=$pren;
                    if($tot>200000){
                        $neto=$tot-($tot*0.20);
                        echo "<br>Precio neto: $".$neto;
                    }else{
                        echo "<br>Precio: $".$tot;
                    }
                    
                ?>
			</form>
		</fieldset>
	</body>
</html>