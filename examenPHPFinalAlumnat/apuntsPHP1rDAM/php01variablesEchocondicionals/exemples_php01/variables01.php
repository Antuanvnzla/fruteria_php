<!DOCTYPE html>
<html lang="ca">

<head>
	<title> Exemple variables 1 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemples Variables 1</h1>
	</header>
	<main id="principal">
		<p>
			<?php
			$A = 3;
			$B = 3;
			$comparacio01 = ($A == $B); // El resultat de la comparació és TRUE perquè $A és igual a $A
			echo "\$A = 3, \$B = 3<br>";
			echo "Comparació 01 : $A==$B  :<br>";
			var_dump($comparacio01);
			?>
		</p>
		<p>
			<?php
			$A = 3;
			$B = 4;
			echo "\$A = 3, \$B =4<br>";
			$comparacio02 = ($A == $B); // El resultat de la comparació és FALSE perquè $A no és igual a $B
			echo "Comparació 02: $A==$B  :<br>";
			var_dump($comparacio02);
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