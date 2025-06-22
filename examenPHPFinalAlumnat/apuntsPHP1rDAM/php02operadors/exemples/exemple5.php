<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple operador mòdul</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple operador mòdul</h1>
	</header>
	<main id="contingut">
		<pre id="codi">
$a = 8;
$b = 2;
echo "Valor de: $a % $b :";
$resultat1 = $a % $b;
var_dump($resultat1);
<br/><br/>
$a = 9;
$b = 4.5;
echo "Valor de: $a % $b :";
$resultat2 = $a % $b;
var_dump($resultat2);
		</pre>
		<p>
			Resultat de l'execució:
			<?php
			$a = 8;
			$b = 2;
			echo "<span class=\"resultat\">Valor de: $a % $b :</span>";
			$resultat1 = $a % $b;
			var_dump($resultat1);
			echo "<br><br>";
			$a = 9;
			$b = 4.5;
			echo "<span class=\"resultat\">Valor de: $a % $b :</span>";
			$resultat2 = $a % $b;
			var_dump($resultat2);
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