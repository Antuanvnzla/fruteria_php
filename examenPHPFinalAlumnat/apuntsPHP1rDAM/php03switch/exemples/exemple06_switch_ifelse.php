<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple switch 06</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple switch 06: switch i if...else</h1>
	</header>
	<main id="contingut">
		<pre class="codi">
$variable = 2;
echo '&#60;h2&#62;Amb if...else&#60/h2&#62;';
if ($variable == 1) {
 echo 'variable: ' . $variable . ' és Igual a 1.';
} else if ($variable == 2 || $variable == 3) {
 echo 'variable: ' . $variable . ' és Igual a 2 o 3.';
} else {
 echo 'variable: ' . $variable . ' no és Igual a 1, 2 o 3.';
}
		</pre>
		<p>
			<?php
			$variable = 2;
			echo '<span class="titol">Amb if...else</span>';
			if ($variable == 1) {
				echo '<span class="resultat">variable: ' . $variable . ' és Igual a 1.</span>';
			} else if ($variable == 2 || $variable == 3) {
				echo '<span class="resultat">variable: ' . $variable . ' és Igual a 2 o 3.</span>';
			} else {
				echo '<span class="resultat">variable: ' . $variable . ' no és Igual a 1, 2 o 3.</span>';
			}
			?>
		</p>
		<pre class="codi">
echo '&#60;h2&#62;Amb switch...case...default&#60;/h2&#62;';
switch ($variable) {
 case 1:
  // S'executa si $variable val 1
  echo 'variable: ' . $variable . ' és Igual a 1.';
  break;
 case 2:
 case 3:
  // S'executa si $variable val 2 o 3
  echo 'variable: ' . $variable . ' és Igual a 2 o 3.';
  break;
 default:
  // S'executa en qualsevol altre cas
  echo 'variable: ' . $variable . ' no és Igual a 1, 2 o 3.';
  break;
}
		</pre>
		<p>
			<?php
			echo '<span class="titol">Amb switch...case...default</span>';
			switch ($variable) {
				case 1:
					// S'executa si $variable val 1
					echo '<span class="resultat">variable: ' . $variable . ' és Igual a 1.</span>';
					break;
				case 2:
				case 3:
					// S'executa si $variable val 2 o 3
					echo '<span class="resultat">variable: ' . $variable . ' és Igual a 2 o 3.</span>';
					break;
				default:
					// S'executa en qualsevol altre cas
					echo '<span class="resultat">variable: ' . $variable . ' no és Igual a 1, 2 o 3.</span>';
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