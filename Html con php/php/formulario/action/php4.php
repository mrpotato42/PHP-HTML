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
			<form action="php4.php" method="post">
				<?php 
		       	 	$n1 =$_POST["numero1"];
		       	 	$n2 =$_POST["numero2"];
		       	 	$sel=$_POST["sel"];
		            If($n1<0 or $n2<0){
		            	echo "Digite nuevamente";
		            }
		            switch ($sel) {
		            	case 'suma':
		            		echo "el resultado de la suma es:", $n1+$n2;
		            		break;
		            	case 'resta':
		            		echo "el resultado de la resta es:", $n1-$n2;
		            	    break;
		           	    case 'multiplicacion':
		            	    echo "el resultado de la Multiplicacion es:", $n1*$n2;
		                    break;
				        case 'division':
		           		    echo "el resultado de la division es:", $n1/$n2;
		        	        break;           
		            }
		 		?>
			</form>
		</fieldset>
	</body>
</html>