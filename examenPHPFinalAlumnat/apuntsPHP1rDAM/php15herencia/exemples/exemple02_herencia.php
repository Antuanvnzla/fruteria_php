<?php
include 'Vehicle.php';
include 'Camio.php';
include 'Autobus.php';
?>

<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple Herència 02</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple Herència 02</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Vehicle</h2>
			<?php
			//creem un nou camió
			echo "<strong>Creem un nou camió</strong><br>";
			$camio = new Camio();
			$camio->ficar_en_marxa();
			// ficar_en_marxa() és un mètode de la classe pare
			// però com que és públic la classe fill (Camio) l'hereta
			// pot ser cridat des de Camio
			$camio->carregar(10);
			$camio->verificar_en_marxa();
			$camio->matricula = 'BSX2492';
			// Ocorre el mateix amb l'atribut matricula i el mètode, són públics
			// i per tant els fill els hereta sense limitacions
			$camio->apagar();
			unset($camio);

			echo "<br><strong>Creem un nou autobús</strong><br>";
			$autobus = new Autobus();
			$autobus->ficar_en_marxa();
			$autobus->pujar_passatgers(5);
			$autobus->verificar_en_marxa();
			$autobus->matricula = 'GJF5103';
			$autobus->apagar();
			unset($autobus);
			?>
		</div>
	</main>
	<footer id="peu">
		<p>
			1r DAM<br>
			Entorns de Desenvolupament<br>
			Curs 2024/2025<br>
		</p>
	</footer>
</body>

</html>