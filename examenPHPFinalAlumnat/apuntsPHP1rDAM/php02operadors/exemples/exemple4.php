<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple comparació cadenes</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple comparació cadenes</h1>
	</header>
	<main id="contingut">

		<pre id="codi">
$cadena1 = "avellana";
$cadena2 = "meló";
echo "Valor de: $cadena1 < $cadena2 :";
$resultat1 = $cadena1 < $cadena2;
var_dump($resultat1);
<br/><br/>
$cadena1 = "cotxe";
$cadena2 = "vehicle";
echo "Valor de: $cadena1 > $cadena2 :";
$resultat2 = $cadena1 > $cadena2;
var_dump($resultat2);
<br/><br/>
$cadena1 = "ARBRE";
$cadena2 = "arbre";
echo "Valor de: $cadena1 > $cadena2 :";
$resultat3 = $cadena1 > $cadena2;
var_dump($resultat3);
		</pre>
		<p>
			Resultat de l'execució:
			<?php
			$cadena1 = "avellana";
			$cadena2 = "meló";
			echo "<span class=\"resultat\">Valor de: $cadena1 < $cadena2 :</span>";
			$resultat1 = $cadena1 < $cadena2;
			var_dump($resultat1);
			echo "<br><br>";
			$cadena1 = "cotxe";
			$cadena2 = "vehicle";
			echo "<span class=\"resultat\">Valor de: $cadena1 > $cadena2 :</span>";
			$resultat2 = $cadena1 > $cadena2;
			var_dump($resultat2);
			echo "<br><br>";
			$cadena1 = "ARBRE";
			$cadena2 = "arbre";
			echo "<span class=\"resultat\">Valor de: $cadena1 > $cadena2 :</span>";
			$resultat3 = $cadena1 > $cadena2;
			var_dump($resultat3);
			?>
		</p>
		<p>
			<a href="ascii.png" target="_blank"><img src="ascii.png" alt="ascii" class="imatge"></a>
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