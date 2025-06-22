<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Exemple Fitxers 02</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple Fitxers</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Exemple 01:<br>Escriure una línia en un fitxer</h2>
			<pre class="codi">
if ($fp = fopen("fitxerEscriure.txt", "w")) {
  for ($i = 0; $i < 5; $i++) {
	fputs($fp, "Escriptura sense final de linia");
  }
  for ($i = 0; $i < 5; $i++) {
	//fputs($fp,"Escriptura amb final de línia \n");
	fputs($fp, "Escriptura amb final de línia" . PHP_EOL);
  }
  fclose($fp);
} else {
  echo "Error Obrint el fitxer <br>";
}
</pre>
			<?php // Escrivim una primera línaa a fitxer.txt
			if ($fp = fopen("fitxerEscriure.txt", "w")) {

				for ($i = 0; $i < 5; $i++) {
					fputs($fp, "Escriptura sense final de linia");
				}
				for ($i = 0; $i < 5; $i++) {
					//fputs($fp,"Escriptura amb final de línia \n");
					fputs($fp, "Escriptura amb final de línia" . PHP_EOL);
				}
				fclose($fp);
			} else {
				echo "Error Obrint el fitxer <br>";
			}
			?>
		</div>

		<div class="tauler">
			<h2>Exemple 02:<br>Comprovació de l'escriptura del fitxer</h2>
			<?php
			//Llegirem línia a línia fitxer.txt fins a la fi (feof ($fp))
			$fp = fopen("fitxerEscriure.txt", "r");
			while (!feof($fp)) {
				$linia = fgets($fp);
				echo $linia . "<br>";
			}
			fclose($fp);
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