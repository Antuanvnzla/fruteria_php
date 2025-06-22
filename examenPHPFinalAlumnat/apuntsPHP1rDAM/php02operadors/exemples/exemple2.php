<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple postincrement</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple post-increment</h1>
	</header>
	<main id="contingut">
		<pre id="codi">
$a = 8;
echo "Valor de \$a amb post-increment";
echo $a++;
<br>
echo "Valor de \$a després del post-increment:";
echo $a;
		</pre>
		<p>
			Resultat de l'execució:
			<?php
			$a = 8;
			echo "<span class=\"resultat\">Valor de \$a amb post-increment:</span>";
			echo "<span class=\"resultat\">".$a++."</span>";
			echo "<br>";
			echo "<span class=\"resultat\">Valor de \$a després del post-increment:</span>";
			echo "<span class=\"resultat\">".$a."</span>";
			?>
		</p>
	</main>
</body>
<footer id="peu">
		<p>
			IES LLuís Simarro<br>
			1r DAM<br>
			Entorns de desenvolupament<br>
		</p>
	</footer>

</html>