<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<title>Datos</title>
</head>
<body align="center">

	<div class="container">
		<div class="form__top">
			<h2>*<span>Operaciones</span></h2>
		</div>		
		<form class="form__reg"  action="php5.php" method="post">
               <?php 
                        $nom=$_POST["nombre"];
                        $id=$_POST["id"];
                        $nota1=$_POST["nota1"];
                        $nota2=$_POST["nota2"];
                        $nota3=$_POST["nota3"];


                        $prom=($nota1+$nota2+$nota3)/3;

                              if ($nota1<0 or $nota1>5) {
                                    echo "repita nuevamente";
                              }else if ($nota2<0 or $nota2>5) {
                                    echo "repita nuevamente";
                              }else if ($nota3<0 or $nota3>5) {
                                    echo "repita nuevamente";
                              }

                              if($prom>=3.5){
                                    echo "el estudiante " .$nom. " Aprobo";
                              }else if($prom<3.5){
                                    echo "el estudiante " .$nom. " Reprobo";
                              }

                ?>
       
        </form>
	</div>
	</body>
</html>