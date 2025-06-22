<!DOCTYPE html>
<html>
	<head>
		<title>Exemple Condicional 03</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id = "cap">
			<h2> Exemple Condicional 03</h2>
		</header>
		<main id="principal">
			<p>
			<?php
				$test = 33;
				echo "<span>\$test està per damunt de 30, 35 i 40?</span><br><br>";
				if ($test>40) {
					echo "\$test, que val $test, és més gran que 40.";
				} else if ($test>35) {
					echo "\$test, que val $test, és més gran que 35.";
				} else if ($test>30) {
					echo "\$test, que val $test, és més gran que 30.";
				} else {
					echo "No, $test és menor que 40, 35 i 30.";
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