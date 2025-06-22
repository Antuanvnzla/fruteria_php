<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple arrays Associatius</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple arrays Associataius</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Declaració 01</h2>
			<pre class="codi">
$colors_vehicles = array(
	'cotxe' => 'roig',
	'moto' => 'verd',
	'avio' => 'groc'
);
echo "Color de la moto: " . $colors_vehicles['moto'] . "&lt;br&gt;";
var_dump($colors_vehicles);
			</pre>
			<p>
			<?php //Exemple arrays associatius
			$colors_vehicles = array(
				'cotxe' => 'roig',
				'moto' => 'verd',
				'avio' => 'groc'
			);
			echo "Color de la moto: " . $colors_vehicles['moto'] . "<br>";
			var_dump($colors_vehicles);
			?>
			</p>
		</div>

		<div class="tauler">
			<h2>Declaració 02</h2>
			<pre class="codi">
unset($colors_vehicles); //eliminem declaració anterior
$colors_vehicles['cotxe'] = 'roig';
$colors_vehicles['moto'] = 'verd';
$colors_vehicles['avio'] = 'groc';
echo "Color del cotxe: " . $colors_vehicles['cotxe'] . "&lt;br&gt;";
var_dump($colors_vehicles);
			</pre>
			<p>
			<?php //Exemple declaració arrays associatius
			unset($colors_vehicles); //eliminem declaració anterior
			$colors_vehicles['cotxe'] = 'roig';
			$colors_vehicles['moto'] = 'verd';
			$colors_vehicles['avio'] = 'groc';
			echo "Color del cotxe: " . $colors_vehicles['cotxe'] . "<br>";
			var_dump($colors_vehicles);
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>Declaració 03</h2>
			<pre class="codi">
unset($colors_vehicles); //eliminem declaració anterior
$colors_vehicles=["cotxe" => "roig", "moto" => "verd", "avió" => "groc"];
echo "Color de l'avió: " . $colors_vehicles['avió'] . "&lt;br&gt;";
var_dump($colors_vehicles);
			</pre>
			<p>
			<?php //Exemple declaració arrays associatius amb =>
			unset($colors_vehicles); //eliminem declaració anterior
			$colors_vehicles = ["cotxe" => "roig", "moto" => "verd", "avió" => "groc"];
			echo "Color de l'avió': " . $colors_vehicles['avió'] . "<br>";
			var_dump($colors_vehicles);
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>Declaració 04</h2>
			<pre class="codi">
unset($colors_vehicles); //eliminem declaració anterior
$colors_vehicles = [1.6 => "roig", 2.6 => "verd", 4.6 => "groc"];
echo "Color element 1.6 " . $colors_vehicles[1.6] . "&lt;br&gt;";
echo "Color element 2.1 " . $colors_vehicles[2.1] . "&lt;br&gt;";
var_dump($colors_vehicles);
			</pre>
			<p>
			<?php //Exemple declaració arrays associatius amb índex float
			unset($colors_vehicles); //eliminem declaració anterior
			$colors_vehicles = [1.6 => "roig", 2.6 => "verd", 4.6 => "groc"];
			echo "Color element 1.6 " . $colors_vehicles[1.6] . "<br>";
			echo "Color element 2.1 " . $colors_vehicles[2.1] . "<br>";
			var_dump($colors_vehicles);
			?>
			</p>
		</div>

	</main>
	<footer id="peu">
		<p>
			1r DAM<br>
			Entorns de Desenvolupament<br>
			IES LLuís Simarro<br>
		</p>
	</footer>
</body>

</html>