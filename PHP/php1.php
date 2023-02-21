<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Numero Positivo</title>
</head>
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Numero</span></h2>
		</div>		
		<form class="form__reg" action="php1.php" method="post">

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
	</div>
	</body>
</html>