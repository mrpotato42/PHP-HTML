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
			<h2>*<span>Numero</span></h2>
		</div>		
		<form class="form__reg"  action="php3.php" method="post">

       <?php 
       	 	
       	 	$num1 =$_POST["numero1"];
       	 	$num2 =$_POST["numero2"];
       	 	$num3 =$_POST["numero3"];

       	 	If($num1 > $num2){
If($num1 > $num3){
echo 'numero ' . $num1 . ' es mayor';
} else {
echo 'numero ' . $num3 . ' es mayor';
}
} else {
If($num2 > $num3){
echo 'numero ' . $num2 . ' es mayor';
} else {
echo 'numero ' . $num3 . ' es mayor';
}
}

		 ?>
        </form>
	</div>
	</body>
</html>