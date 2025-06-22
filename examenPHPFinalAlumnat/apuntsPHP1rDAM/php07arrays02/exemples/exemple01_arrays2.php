<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple arrays 02</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple arrays 02</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Declaració matriu 01 (mètode 1)</h2>
			<pre class="codi">
$animals[0][0] = "Gos"; //Fila 0, Columna 0
$animals[0][1] = "Gat"; //Fila 0, Columna 1
$animals[1][0] = "Cuc"; //Fila 1, Columna 0
$animals[1][1] = "Aladroc"; //Fila 1, Columna 1
$animals[2][0] = "Ximpanzé"; //Fila 2, Columna 0
$animals[2][1] = "Cocodril"; //Fila 2, Columna 1
echo "Animals[2,1]: " . $animals[2][1] . "&lt;br&gt;";
echo "Animals[0,0]: " . $animals[0][0] . "&lt;br&gt;";
var_dump($animals);
			</pre>
			<p>
				<?php
				$animals[0][0] = "Gos"; //Fila 0, Columna 0
				$animals[0][1] = "Gat"; //Fila 0, Columna 1
				$animals[1][0] = "Cuc"; //Fila 1, Columna 0
				$animals[1][1] = "Aladroc"; //Fila 1, Columna 1
				$animals[2][0] = "Ximpanzé"; //Fila 2, Columna 0
				$animals[2][1] = "Cocodril"; //Fila 2, Columna 1
				echo "Animals[2,1]: " . $animals[2][1] . "<br>";
				echo "Animals[0,0]: " . $animals[0][0] . "<br>";
				var_dump($animals);
				?>
			</p>
		</div>
		<div class="tauler">
			<h2>Declaració matriu 01 (mètode 2)</h2>
			<pre class="codi">
//altra manera de declarar matrius:
echo "&lt;strong&gt;Definim l'array només amb Claudàtors [ ] &lt;/strong&gt;";
unset($animals); //eliminem la definició anterior de la matriu
$animals = [["Goril·la", "Lleona"],
	["Papallona", "Granota"],
	["Ovella", "Mosquit"]];
var_dump($animals);
			</pre>
			<p>
				<?php
				//altra manera de declarar matrius:
				echo "<strong>Definim l'array només amb Claudàtors [ ] </strong>";
				unset($animals); //eliminem la definició anterior de la matriu
				$animals = [["Goril·la", "Lleona"], ["Papallona", "Granota"], ["Ovella", "Mosquit"]];
				var_dump($animals);
				?>
			</p>
		</div>

		<div class="tauler">
			<h2>Declaració Matriu 02 (mètode 1)</h2>
			<pre class="codi">
$animals = array(
	array("Gos", "Gat"), //Fila 0: vector de 2 elements
	array("Cuc", "Aladroc"), //Fila 1: vector de 2 elements
	array("Ximpanzé", "Cocodril") //Fila 2: vector de 2 elements
);
echo "Animals[2,1]: " . $animals[2][1] . "&lt;br&gt;";
echo "Animals[0,0]: " . $animals[0][0] . "&lt;br&gt;";
			</pre>
			<p>
			<?php
				$animals = array(
					array("Gos", "Gat"), //Fila 0: vector de 2 elements
					array("Cuc", "Aladroc"), //Fila 1: vector de 2 elements
					array("Ximpanzé", "Cocodril") //Fila 2: vector de 2 elements
				);
				echo "Animals[2,1]: " . $animals[2][1] . "<br>";
				echo "Animals[0,0]: " . $animals[0][0] . "<br>";
			?>
			</p>
		</div>

		<div class="tauler">
			<h2>Declaració Matriu 02 (mètode 2)</h2>
			<pre class="codi">
unset($animals); //eliminem la definició anterior de la matriu
$animals[0] = array("Gos", "Gat");
$animals[1] = array("Cuc", "Aladroc");
$animals[2] = array("Ximpanzé", "Cocodril");
echo "Animals[2,1]: " . $animals[2][1] . "&lt;br&gt;";
echo "Animals[0,0]: " . $animals[0][0] . "&lt;br&gt;";
//Accedim a un element que no existeix:
echo "No existeix Animals[4,0]: " . $animals[4][0] . "&lt;br&gt;";
			</pre>
			<p>
				<?php
				$animals[0] = array("Gos", "Gat");
				$animals[1] = array("Cuc", "Aladroc");
				$animals[2] = array("Ximpanzé", "Cocodril");
				echo "Animals[2,1]: " . $animals[2][1] . "<br>";
				echo "Animals[0,0]: " . $animals[0][0] . "<br>";
				//Accedim a un element que no existeix:
				echo "No existeix Animals[4,0]: " . $animals[4][0] . "<br>";
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