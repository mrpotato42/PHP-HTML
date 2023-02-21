<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title></title>
</head>
<body>

	<div class="container">
		<div class="form__top">
			<h2>*<span>Tablas de multiplicar</span></h2>
		</div>		
		<form class="form__reg" action="php7.php" method="post">
			<p align="center">Eliga La tabla de multiplicar que desea ver...</p>
			<br>
			<br>
			 
			<input type="radio" name="tabla" value="2"> Tabla del Dos<br><br>
            <input type="radio" name="tabla" value="3"> Tabla del Tres<br><br>
            <input type="radio" name="tabla" value="5"> Tabla del Cinco<br><br>
            <br>
            <br>
           
            
			
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="OK">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
	
</body>
</html>