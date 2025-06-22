<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Exemple Fitxers 03</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple Fitxers</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Exemple 01:<br>Lectura de fitxer amb fgets()</h2>
			<?php
			//Llegirem línia a línia fitxer.txt fins a la fi (feof ($fp))
			if ($fp = fopen("fitxer.txt", "r")) {
				while (!feof($fp)) {
					$linia = fgets($fp);
					echo $linia . "<br>";
				}
				fclose($fp);
			} else {
				echo "Error obrint el fitxer <br>";
			}
			?>
		</div>

		<div class="tauler">
			<h2>Exemple 02:<br>Lectura de fitxer amb fread()</h2>
			<?php
			//Llegirem línia a línia fitxer.txt fins a la fi (feof ($fp))
			if ($fp = fopen("fitxer.txt", "r")) { //també "rb"
				while (!feof($fp)) {
					$linia = fread($fp, 10);
					echo $linia . "<br>";
				}
				fclose($fp);
			} else {
				echo "Error obrint el fitxer <br>";
			}
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