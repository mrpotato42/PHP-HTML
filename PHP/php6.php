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
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Tienda de Ropa</span></h2>
		</div>		
		<form class="form__reg"  action="php6.php" method="post">
               <?php 
                     $compra=$_POST["select"]   
                     
                     $compra=["camisa"]='20000';
                      $compra=["pantaloneta"]='18000';
                       $compra=["gorra"]='10000';
                        $compra=["zapatos"]='200000';
                         $compra=["reloj"]='500000';
                          $compra=["saco"]='60000';
                           $compra=["medias"]='5000';
                            $compra=["sombrero"]='10000';
                             $compra=["guayos"]='100000';
                              $compra=["chaqueta"]='70000';

                 
                  
                 

                ?>
       
        </form>
	</div>
	</body>
</html>