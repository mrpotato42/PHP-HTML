<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Numero</title>
</head>
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Numero</span></h2>
		</div>		
		<form class="form__reg"  action="php2.php" method="post">
       <?php 
       	 	
       	 	$num =$_POST["numero"];
			$numero = 0;

       	 	do{
	         	$num = floor($num / 10);
	          	$numero = $numero + 1;
				} while ($num > 0);
				echo " Tu numero tiene " . $numero . " digitos";

		 ?>
        </form>
	</div>
	</body>
</html>