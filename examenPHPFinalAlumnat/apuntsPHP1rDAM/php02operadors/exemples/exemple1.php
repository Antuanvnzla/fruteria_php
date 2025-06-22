<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple operadors</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple operadors</h1>
	</header>
	<main id="contingut">
		<pre id="codi">
			$a = 3;
			$b = 9;
			$resultat = ($a <= 3 and $b <> 9);
			if ($resultat == true) {
				echo "Es compleix la condició";
			} else {
				echo "No es compleix la condició";
			}
		</pre>
		<p>
			Resultat de l'execució:
			<?php
			$a = 3;
			$b = 9;
			$resultat = ($a <= 3 and $b <> 9);
			if ($resultat == true) {
				echo "<span class=\"resultat\">Es compleix la condició</span>";
			} else {
				echo "<span class=\"resultat\">No es compleix la condició</span>";
			}
			?>
		</p>
	</main>
	<footer id="peu">
		<p>
			IES LLuís Simarro<br>
			1r DAM<br>
			Entorns de desenvolupament<br>
		</p>
	</footer>
</body>

</html>