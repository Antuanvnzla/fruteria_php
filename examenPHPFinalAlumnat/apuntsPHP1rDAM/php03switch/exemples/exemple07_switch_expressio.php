<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple switch 07</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple switch 07: case amb expressió senzilla</h1>
</header>
	<main id="contingut">
		<pre id="codi">
$variable = 1; //valor a comprovar en el switch
$valorInicial = 3; // variable que s'utilitza en el case

switch ($variable) {
 case $valorInicial - 1:
  echo "A: Valor $variable : ".$valorInicial-1;
  break;
 case $valorInicial - 2:
  echo "B: Valor $variable: ".$valorInicial-2;
  break;
 case $valorInicial - 3:
  echo "C: Valor $variable: ".$valorInicial-3;
  break;
 case $valorInicial - 4:
  echo "D: Valor $variable: ".$valorInicial-4;
  break;
}
		</pre>

	<p>

		<?php
		$variable = 1; //valor a comprovar en el switch
		$valorInicial = 3; // variable que s'utilitza en el cas

		switch ($variable) {
			case $valorInicial - 1:
				echo "<span class=\"resultat\">A: Valor \$variable: ".($valorInicial-1)."</span>";
				break;
			case $valorInicial - 2:
				echo "<span class=\"resultat\">B: Valor \$variable: ".($valorInicial-2)."</span>";
				break;
			case $valorInicial - 3:
				echo "<span class=\"resultat\">C: Valor \$variable: ".($valorInicial-3)."</span>";
				break;
			case $valorInicial - 4:
				echo "<span class=\"resultat\">D: Valor \$variable: ".($valorInicial-4)."</span>";
				break;
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