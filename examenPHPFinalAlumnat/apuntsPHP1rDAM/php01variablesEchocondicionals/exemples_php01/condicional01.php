<!DOCTYPE html>
<html>
	<head>
		<title>Exemple Condicional 01</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id = "cap">
			<h2> Exemple Condicional 01 </h2>
		</header>
		<main id="principal">
			<p>
			<?php
				//definim una variable amb un valor booleà
				$galetes = false;
				if($galetes == true) {
					echo 'Hi ha galetes'; //true
				} else {
					echo 'No hi ha galetes'; //false
				}
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