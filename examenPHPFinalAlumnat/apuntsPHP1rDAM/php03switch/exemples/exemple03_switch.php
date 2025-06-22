<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>Exemple switch 03</title>
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id="cap">
			<h1>Exemple switch 03</h1>
		</header>
		<main id="contingut">
			<pre id="codi">
$variable=4;
switch($variable) {
	case 1:
	case 2:
	case 3:
      echo '&#60;h3&#62;La variable val 1, 2 o 3&#60;/h3&#62;';
      break;
	default:
      echo '&#60;h3&#62;La variable no val ni 1 ni 2 ni 3,<br>
    val: '.$variable.'&#60;/h3&#62;';
      break;
}
			</pre>
			<p>
				Resultat de l'execució:
			<?php
				$variable=4;
				switch($variable) {
					case 1:
					case 2:
					case 3:
        	  echo '<span class="resultat">La variable val 1, 2 o 3</span>';
        	  break;
					default:
        	  echo '<span class="resultat">La variable no val ni 1 ni 2 ni 3, val: '.$variable.'</span>';
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