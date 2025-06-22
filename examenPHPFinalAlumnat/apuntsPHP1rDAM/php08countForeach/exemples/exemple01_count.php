<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple count</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple count Arrays unidimensionals</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>count</h2>
			<pre class="codi">
$estacions[0] = "Primavera";
$estacions[1] = "Estiu";
$estacions[2] = "Tardor";
$estacions[3] = "Hivern";
//altres definicions
// $estacions = ["Primavera","Estiu","Tardor","Hivern"];
// $estacions = array("Primavera","Estiu","Tardor","Hivern");
echo "Quantitat d’elements en l’array: " . count($estacions) . "&lt;br&gt;";
var_dump($estacions);
			</pre>
			<p>
				<?php
				$estacions[0] = "Primavera";
				$estacions[1] = "Estiu";
				$estacions[2] = "Tardor";
				$estacions[3] = "Hivern";
				//altres definicions
				// $estacions = ["Primavera","Estiu","Tardor","Hivern"];
				// $estacions = array("Primavera","Estiu","Tardor","Hivern");
				echo "Quantitat d’elements en l’array: " . count($estacions) . "<br>";
				var_dump($estacions);
				?>
			</p>
		</div>

		<div class="tauler">
		<h2>for amb count</h2>
			<pre class="codi">
$array[0] = "U";
$array[1] = "Dos";
$array[2] = "Tres";
$array[3] = "Quatre";
$array[4] = "Cinc";
$array[5] = "Sis";
$array[6] = "Set";
$array[7] = "Huit";
for ($i = 0; $i < count($array); $i++) {
	echo "Element " . $i . " : " . $array[$i] . "&lt;br&gt;";
}
			</pre>
			<p>
				<?php
				$array[0] = "U";
				$array[1] = "Dos";
				$array[2] = "Tres";
				$array[3] = "Quatre";
				$array[4] = "Cinc";
				$array[5] = "Sis";
				$array[6] = "Set";
				$array[7] = "Huit";
				for ($i = 0; $i < count($array); $i++) {
					echo "Element " . $i . " : " . $array[$i] . "<br>";
				}
				/*
				// es pot fer el mateix amb un while
					$i=0;
					while($i < count($array)) {
						echo "Element ".$i." : ".$array[$i]. "<br>";
						$i++;
					}
				*/
				?>
			</p>
		</div>

		<div class="tauler">
		<h2>for amb count, no comença per 0</h2>
			<pre class="codi">
//per reinicialitzar l'array:
$array = array();
//assignem valors amb índex que no comencen per 0
$array[5] = "Un";
$array[6] = "Dos";
$array[7] = "Tres";
$array[8] = "Quatre";
$array[9] = "Cinc";
$array[10] = "Sis";
$array[11] = "Set";
$array[12] = "Vuit";
echo "Elements inicialitzats a la matriu: " . count($array) . "&lt;br&gt;";
//cal modificar-ho per veure'ls tots (suposant que són consecutius)
for ($i = 0; $i < count($array); $i++) {
	echo "Element " . $i . " : " . $array[$i] . "&lt;br&gt;";
}
echo "&lt;br&gt;Element 15 : " . $array[15] . "&lt;br&gt;";
echo "&lt;br&gt;Elements d’un altre array: ".count($altreArray[14][33])."&lt;br&gt;";

			</pre>
			<p>
				<?php
				//per reinicialitzar l'array:
				$array = array();
				//assignem valors amb índex que no comencen per 0
				$array[5] = "Un";
				$array[6] = "Dos";
				$array[7] = "Tres";
				$array[8] = "Quatre";
				$array[9] = "Cinc";
				$array[10] = "Sis";
				$array[11] = "Set";
				$array[12] = "Vuit";
				echo "Elements inicialitzats a la matriu: " . count($array) . "<br>";
				for ($i = 0; $i < count($array); $i++) { //cal modificar-ho per veure'ls tots (suposant que són consecutius)
					echo "Element " . $i . " : " . $array[$i] . "<br>";
				}
				echo "<br>Element 15 : " . $array[15] . "<br>";
				echo "<br>Elements d’un altre array: " . count($altreArray[14][33]) . "<br>"; //error fatal
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