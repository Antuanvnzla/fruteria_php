<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple foreach</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple foreach</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
		<h2>foreach</h2>
			<pre class="codi">
$persones = array(
  array('nom' => 'Antonio',
	'cognoms' => 'Gómez Gómez',
	'telèfon' => '675.832.145'),
  array('nom' => 'Pedro',
	'cognoms' => 'Guillén Gastón',
	'telèfon' => '674.562.178'),
  array('nom' => 'Lola',
	'cognoms' => 'Pi Orts',
	'telèfon' => '689.765.432'),
  array('nom' => 'Rubén',
	'cognoms' => 'Part Pla',
	'telèfon' => '654.213.896'),
);
foreach ($persones as $persona) { //recorreguem l'array $row amb foreach
	echo 'Nom: ' . $persona['nom'] . ' - ';
	echo 'Cognoms: ' . $persona['cognoms'] . ' - ';
	echo 'Telèfon: ' . $persona['telèfon'] . '&lt;br&gt;';
	echo '&lt;br&gt;';
}
foreach ($persones as $persona) { //recorreríem els elements 0,1,2,3
  //recorreríem nom, cognoms, telèfon
  foreach ($persona as $clau => $valorCamp) {
    echo 'Valor[' . $clau . "]: " . $valorCamp . '&lt;br&gt;';
  }
  echo '&lt;br&gt;';
}
			</pre>
			<p>
				<?php
				$persones = array(
					array('nom' => 'Antonio', 'cognoms' => 'Gómez Gómez', 'telèfon' => '675.832.145'),
					array('nom' => 'Pedro', 'cognoms' => 'Guillén Gastón', 'telèfon' => '674.562.178'),
					array('nom' => 'Lola', 'cognoms' => 'Pi Orts', 'telèfon' => '689.765.432'),
					array('nom' => 'Rubén', 'cognoms' => 'Part Pla', 'telèfon' => '654.213.896'),
				);
				foreach ($persones as $persona) { //recorreguem l'array $row amb foreach
					echo 'Nom: ' . $persona['nom'] . ' - ';
					echo 'Cognoms: ' . $persona['cognoms'] . ' - ';
					echo 'Telèfon: ' . $persona['telèfon'] . '<br>';
					echo '<br>';
				}
				foreach ($persones as $persona) { //recorreríem els elements 0,1,2,3
					foreach ($persona as $clau => $valorCamp) { //recorreríem nom, cognoms, telèfon
						echo 'Valor[' . $clau . "]: " . $valorCamp . '<br>';
					}
					echo '<br>';
				}
				?>
			</p>
		</div>

		<div class="tauler">
		<h2>foreach</h2>
		<pre class="codi">
$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
foreach ($estacions as $estacio) {
	echo "Estació: " . $estacions . '&lt;br&gt;';
}
			</pre>
			<p>
				<?php
				$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
				foreach ($estacions as $estacio) {
					echo "Estació: " . $estacio . '<br>';
				}
				?>
			</p>
		</div>

		<div class="tauler">
		<h2>foreach</h2>
		<pre class="codi">
		echo "&lt;strong&gt;Canvi de valors&lt;/strong&gt;&lt;br&gt;";
$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
var_dump($estacions);
echo "&lt;strong&gt;Utilitzant la variable temporal del foreach: no funciona&lt;/strong&gt;&lt;br&gt;";
$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
$comptador = 1;
foreach ($estacions as $estacio) {
	$estacio = $comptador . " " . $estacio;
	$comptador++;
}
//així no funcionaria
var_dump($estacions);
echo "&lt;strong&gt;Utilitzant la clau i el nom de l'array original sí que funciona&lt;/strong&gt;&lt;br&gt;";
$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
$comptador = 1;
foreach ($estacions as $clau => $estacio) {
    //assignació, ací es canvia el valor en l'array
	$estacions[$clau] = $comptador . " " . $estacio;
	$comptador++;
}
//així no funcionaria
var_dump($estacions);
			</pre>
			<p>
				<?php
				echo "<strong>Canvi de valors</strong><br>";
				$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
				var_dump($estacions);
				echo "<br><strong>Utilitzant la variable temporal del foreach: no funciona</strong><br>";
				$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
				$comptador = 1;
				foreach ($estacions as $estacio) {
					$estacio = $comptador . " " . $estacio;
					$comptador++;
				}
				//així no funcionaria
				var_dump($estacions);
				echo "<br><strong>Utilitzant la clau i el nom de l'array original sí que funciona</strong><br>";
				$estacions = array("Primavera", "Estiu", "Tardor", "Hivern");
				$comptador = 1;
				foreach ($estacions as $clau => $estacio) {
					$estacions[$clau] = $comptador . " " . $estacio; //assignació, ací es canvia el valor en l'array
					$comptador++;
				}
				//així no funcionaria
				var_dump($estacions);

				?>
			</p>
		</div>

	</main>
	<footer id="peu">
		<p>
			1r DAM<br>
			Entorns de Desenvolupament<br>
			IES Lluís Simarro<br>
		</p>
	</footer>
</body>

</html>