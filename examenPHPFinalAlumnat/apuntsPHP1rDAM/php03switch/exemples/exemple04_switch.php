<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>Exemple switch 04</title>
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id="cap">
			<h1>Exemple switch 04: cadenes</h1>
</header>
		<main id="contingut">
			<pre id="codi">
$variable="banana";
switch($variable) {
  case "pera":
  case "poma":
  case "albercoc":
   echo '&#60;h3&#62;La variable val pera, poma o albercoc&#60;/h3&#62;';
   break;
  default:
   echo '&#60;h3&#62;La variable no val ni pera ni poma <br>
   ni albercoc, val: '.$variable.'&#60;/h3&#62;';
   break;
}
			</pre>
			<p>
				Resultat de l'execució:
			<?php
				$variable="banana";
				switch($variable) {
					case "pera":
					case "poma":
					case "albercoc":
        	  echo '<span class="resultat">La variable val pera, poma o albercoc</span>';
        	  break;
					default:
        	  echo '<span class="resultat">La variable no val ni pera ni poma ni albercoc, val: '.$variable.'</span>';
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