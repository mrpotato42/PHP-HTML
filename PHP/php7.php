<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Tablas de multiplicar</title>
</head>
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Tablas de multiplicar</span></h2>
		</div>		

		<form class="form__reg"  action="php7.php" method="post">
              
              <?php     
                
                  $multiplicador = 1;  
                  $tabla=$_POST["tabla"]               

      
          if ($tabla=="2"]) {
                      
              echo "la tabla del dos es: ";

              while (2 <= 20) {
                echo "<p> 2 * {$multiplicador} = " . 2 * $multiplicador. "</p>";
               $multiplicador++;
                    }
             }


          if ($tablas3=["tabla"]) {
                      
              echo "la tabla del 3 es: ";

              while (3 <= 20) {
                echo "<p> 3 * {$multiplicador} = " . 3 * $multiplicador. "</p>";
               $multiplicador++;
                    }
             }

             if ($tablas5=$_POST["tabla"]) {
                      
              echo "la tabla del 5 es: ";

              while (5 <= 20) {
                echo "<p> 5 * {$multiplicador} = " . 5 * $multiplicador. "</p>";
               $multiplicador++;
                    }
             }
      ?>

        </form>
	</div>
	</body>
</html>