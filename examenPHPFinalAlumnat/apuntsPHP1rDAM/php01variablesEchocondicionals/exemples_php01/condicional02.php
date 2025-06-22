<!DOCTYPE html>
<html>
	<head>
		<title>Exemple Condicional 02</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id = "cap">
			<h2> Exemple Condicional 02</h2>
		</header>
		<main id="principal">
			<p>
			<?php
				$galetes = true;
				if ($galetes==true) {
					//alternem codi php amb codi html
			?>
			<br>
			<span> Hi ha galetes o no hi ha galetes?</span>
			<hr>
			<?php
					echo 'Hi ha galetes';
					echo '<br>';
					echo '<br>';
					echo '<hr>';
				} else {
						echo 'No hi ha galetes';
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