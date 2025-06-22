<!DOCTYPE html>
<html lang="ca">
	<head>
		<title> Exemple variables 2</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
	<header id="cap">
		<h1>Exemple Variables 2</h1>
	</header>
	<main id="principal">
		<p>
		<?php
			//es mostra cada línia per separat en el navegador?
			echo "eixida per pantalla.";
			$A = 5;
			echo $A;
			echo "El valor de la variable $A és $A.";  //es mostra $A o el valor de la variable?
		?>
		</p>
	</main>
	<footer id="peu">
		<p>
			IES Lluís Simarro<br>
			Entorns de desenvolupament<br>
			1r DAM<br>
		</p>
	</footer>
	</body>
</html>