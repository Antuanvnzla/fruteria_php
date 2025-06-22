<!DOCTYPE html>
<html lang="ca">
	<head>
		<title> Exemple variables 3</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
	<header id="cap">
		<h1>Exemples Variables 3</h1>
	</header>
	<main id="principal">
		<p>
		<?php
			echo 'amb cometes simples <br/>';
			echo ( 'amb parèntesis i cometes simples <br/>');
			echo ( "amb parèntesis i cometes dobles <br/>");
			echo '<h1> Eixida per pantalla </h1> <br/>';
			echo "eixida per pantalla.";
			$A = 5;
			echo $A;
			echo "El valor de la variable A és $A.";
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