<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Numero Mayor</title>
</head>
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Operaciones</span></h2>
		</div>		
		<form class="form__reg"  action="php4.php" method="post">
        
       <?php 
       	 	
       	 	$num1 =$_POST["numero1"];
       	 	$num2 =$_POST["numero2"];
       	 	$com=$_POST["combo"];


            If($num1<0 or $num2<0){
            	echo "Digite nuevamente";
            }
            switch ($com) {
            	case 'suma':
            		echo "el resultado de la suma es:", $num1+$num2;
            		break;
            		case 'resta':
            		    echo "el resultado de la resta es:", $num1-$num2;
            		    break;
            		    case 'multiplicacion':
            		       echo "el resultado de la Multiplicacion es:", $num1*$num2;
            		         break;
            		         case 'division':
            		         echo "el resultado de la division es:", $num1/$num2;
            		         break;
            
            }


		 ?>
        </form>
	</div>
	</body>
</html>