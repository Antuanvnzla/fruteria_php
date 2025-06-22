<!DOCTYPE html>
<html>
	<head>
		<title> Exemple sintaxi alternativa</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id = "cap">
			<h1> Exemple sintaxi alternativa </h1>
			<h3> Exemples PHP </h3>
		</header>
		<main id="principal">
			<h3>Exemple if - else</h3>
			<p>
			<?php
				$a = 4;
				echo "\$a val $a<br>";
				if ($a == 5): //comprovem si val 5
			?>
				$a és igual 5<br>
			<?php 
				else:
			?>
				$a no és igual a 5<br>
			<?php
				endif; 
			?>
			</p>

			<h3>Exemple if - else if - else</h3>
			<p>
			<?php
				$a = 7;
				echo "Ara, \$a val $a<br>";
				if ($a == 5):  //comprovem si val 5
					echo "\$a val 5<br>";
				elseif ($a == 6):  //comprovem si val 6
					echo "\$a val 6<br>";
				else:
					echo "\$a no val ni 5 ni 6<br>";
				endif;
			?>
			</p>
		</main>
		<footer id="peu">
			<p>
				IES Lluís Simarro<br>
				Entorns de desenvolupament<br>
				1r DAM<br>
			</p>
		</footer>
	</body>
</html>