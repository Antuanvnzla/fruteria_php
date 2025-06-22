<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple preincrement</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple pre-increment</h1>
	</header>
	<main id="contingut">
		<pre id="codi">
$a = 8;
echo "Valor de \$a amb pre-increment";
echo ++$a;
<br/>
echo "Valor de \$a després del pre-increment:";
echo $a;
		</pre>
		<p>
			Resultat de l'execució:
			<?php
			$a = 8;
			echo "<span class=\"resultat\">Valor de \$a amb pre-increment</span>";
			echo "<span class=\"resultat\">".++$a."</span>";
			echo "<br/>";
			echo "<span class=\"resultat\">Valor de \$a després del pre-increment:</span>";
			echo "<span class=\"resultat\">".$a."</span>";
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