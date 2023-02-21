<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Tienda de Ropa</title>
</head>
<body>

	<div class="container">
		<div class="form__top">
			<h2>*<span>Tienda de Ropa</span></h2>
		</div>		
		<form class="form__reg" action="php6.php" method="post">
			<p align="center">Eliga La ropa Que desea Comprar</p>
			<br>
			<br>
			<select name="select" multiple>
    			   <option value="camisa">Camisa Lacoste</option>
                      <option value="pantaloneta">Pantaloneta Gucci</option>
                       <option value="gorra">Gorra Tommy Gilfiler</option>
                        <option value="zapatos">Zapatos Adidas</option>
                         <option value="reloj">Reloj Rolex</option>
                          <option value="saco">Saco Supreme</option>
                           <option value="medias">Medias</option>
                            <option value="sombrero">Sombrero</option>
                             <option value="guayos">Guayos Puma</option>
                              <option value="chaqueta">Chaqueta Under Armour</option>
			</select>
			
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="OK">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>
	
</body>
</html>