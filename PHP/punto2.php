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
			<h2>*<span>Numero</span></h2>
		</div>		
		<form class="form__reg" action="php2.php" method="post">
			<input class="input" type="number" name="numero" placeholder="&#128100;">
            
            
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="OK">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
	
</body>
</html>