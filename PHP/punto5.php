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
<body>

	<div class="container">
		<div class="form__top">
			<h2>*<span>Datos</span></h2>
		</div>		
		<form class="form__reg" action="php5.php" method="post">

			<input class="input" type="text" name="nombre" placeholder="&#128100;"><br>
			<input class="input" type="number" name="id" placeholder="&#128100;"><br>
			<input class="input" type="number" name="nota1" placeholder="&#128100;"><br>
			<input class="input" type="number" name="nota2" placeholder="&#128100;"><br>
			<input class="input" type="number" name="nota3" placeholder="&#128100;"><br>
			
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="OK">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
	
</body>
</html>