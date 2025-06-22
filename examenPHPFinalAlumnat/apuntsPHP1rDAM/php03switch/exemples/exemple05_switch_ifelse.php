<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple switch 05</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple switch 05: switch i if...else</h1>
	</header>
	<main id="contingut">
		<pre class="codi">
$variable=5;
echo '&#60;h3&#62;Amb if...else&#60;/h3&#62;';
if($variable==1) {
  echo 'valor de la variable: '.$variable.' Igual a 1.';
} else if ($variable==2) {
  echo 'valor de la variable: '.$variable.' Igual a 2.';
} else if($variable==3) {
  echo 'valor de la variable: '.$variable.' Igual a 3';
} else {
  echo 'variable: '.$variable.' no és Igual a 1, 2 o 3.';
}
			</pre>
		<p>
			Resultat de l'execució:
			<?php
			$variable = 5;
			echo '<span class="titol">Amb if...else</span>';
			if ($variable == 1) {
				echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 1.</span>';
			} else if ($variable == 2) {
				echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 2.</span>';
			} else if ($variable == 3) {
				echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 3.</span>';
			} else {
				echo '<span class="resultat">variable: ' . $variable . ' no és Igual a 1, 2 o 3.</span>';
			}
			?>
		</p>

		<pre class="codi">
echo '&#60;h3&#62;Amb switch...case...default&#60;/h3&#62;';
switch($variable) {
 case 1 :
  echo 'valor de la variable: '.$variable.' Igual a 1.';
  break ;
 case 2 :
  echo 'valor de la variable: '.$variable.' Igual a 2.';
  break ;
 case 3 :
  echo 'valor de la variable: '.$variable.' Igual a 3';
  break;
 default:
  echo 'variable: '.$variable.' no és Igual a 1, 2 o 3.';
  break;
}						
			</pre>
		<p>
			<?php
			echo '<span class="titol">Amb switch...case...default</span>';
			switch ($variable) {
				case 1:
					echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 1.</span>';
					break;
				case 2:
					echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 2.</span>';
					break;
				case 3:
					echo '<span class="resultat">valor de la variable: ' . $variable . ' Igual a 3.</span>';
					break;
				default:
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