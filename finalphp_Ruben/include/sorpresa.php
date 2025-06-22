<?php
	isset($_COOKIE['sorpresa'])?$sorpresa=$_COOKIE['sorpresa']:"42";
?>
<!DOCTYPE html>
<html lang="ca">
	<head>
		<meta charset="utf-8">
		<title>Exercici 02 : Sorpresa</title>
		<link  rel="stylesheet" href="../css/estilsProcessa.css">
		<link  rel="stylesheet" href="../css/estilsSorpresa.css">				
	</head>
	<body>
		<div id="wrapper">
			<header id="cap">
				<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
				<h1>Examen PHP :: Exercici 02 : Sorpresa</h1>
				<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
			</header>
			<main id="contingut">
			
			<!-- Resultat exercici 02 - Sorpresa -->
				<article class="exercici">
					<?php
							//Ací el codi de l'alumnat
					echo "el numero era: $sorpresa </br>";
					for ($i=0; $i < $sorpresa; $i++) { 
						echo "<img class='imatgequadrat' src='./../img/sorpresa.png'>";
					}

	
					?>
					<p class="tornar"><a href="../index.php#exercici02">Tornar</a></p>
				</article>			
			
			</main>
			<footer id="peu">
				<?php					
					include './partials/peu.php';					
				?>
			</footer>
		</div>
	</body>
</html>
