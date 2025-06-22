<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Exemple arrays Multidimensionals</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple arrays Multidimensionals</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>Declaració 01</h2>
			<pre class="codi">
$animals[0][0][0] = "Gos" ;
$animals[0][0][1] = "Gat" ;
$animals[0][0][2] = "Cuc" ;
$animals[1][0][0] = "Aladroc" ;
$animals[1][0][1] = "Ximpanzé" ;
$animals[1][0][2] = "Cocodril" ;
echo "Animals[1][0][1]: ".$animals[1][0][1]."&lt;br&gt;";
//element que no existeix
echo "Animals[0,0,3]: ".$animals[0][0][3]."&lt;br&gt;";
var_dump($animals);
			</pre>
			<p>
				<?php
				$animals[0][0][0] = "Gos";
				$animals[0][0][1] = "Gat";
				$animals[0][0][2] = "Cuc";
				$animals[1][0][0] = "Aladroc";
				$animals[1][0][1] = "Ximpanzé";
				$animals[1][0][2] = "Cocodril";
				echo "Animals[1][0][1]: " . $animals[1][0][1] . "<br>";
				//element que no existeix
				echo "Animals[0][0][3]: " . $animals[0][0][3] . "<br>";
				var_dump($animals);
				?>
			</p>
		</div>

		<div class="tauler">
			<h2>Declaració 02</h2>
			<pre class="codi menor">
$dates = array(// Declaració de l’array
	array(// Dimensio[0] [...] [...]
		array("13 gener 2019", "11 febrer 2023"), // [0][0][...]
		array("13 gener 2021", "11 febrer 2024"), // [0][1][...]
	),
	array(// Dimensio[1] [...] [...]
		array("3 agost 2018", "1 octubre 2022"), // [1][0][...]
		array("3 agost 2019", "1 octubre 2024"), // [1][1][...]
	),
	array(// Dimensio[2] [...] [...]
		array("10 juny 2020", "11 març 2024"), // [2][0][...]
	),
	array(// Dimensio[3] [...] [...]
		array("22 març 2021", "28 maig 2025"), // [3][0][...]
		array("22 març 2020", "28 maig 2022"), // [3][1][...]
		array("22 març 2022", "28 maig 2024"), // [3][2][...]
		array("22 març 2023", "28 maig 2025"), // [3][3][...]
	)
);
//visualitzem els continguts
echo "dates[3][2][0]: " . $dates[3][2][0] . "&lt;br&gt;";

echo "Contracte del dia: " . $dates[0][0][0] . " al dia: " . $dates[0][0][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[0][1][0] . " al dia: " . $dates[0][1][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[1][0][0] . " al dia: " . $dates[1][0][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[1][1][0] . " al dia: " . $dates[1][1][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[2][0][0] . " al dia: " . $dates[2][0][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[3][0][0] . " al dia: " . $dates[3][0][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[3][1][0] . " al dia: " . $dates[3][1][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[3][2][0] . " al dia: " . $dates[3][2][1] . "&lt;br&gt;";
echo "Contracte del dia: " . $dates[3][3][0] . " al dia: " . $dates[3][3][1] . "&lt;br&gt;";
var_dump($dates);
			</pre>
			<p>
			<?php
			$dates = array(// Declaració de l’array
				array(// Dimensio[0] [...] [...]
					array("13 gener 2019", "11 febrer 2023"), // [0][0][...]
					array("13 gener 2021", "11 febrer 2024"), // [0][1][...]
				),
				array(// Dimensio[1] [...] [...]
					array("3 agost 2018", "1 octubre 2022"), // [1][0][...]
					array("3 agost 2019", "1 octubre 2024"), // [1][1][...]
				),
				array(// Dimensio[2] [...] [...]
					array("10 juny 2020", "11 març 2024"), // [2][0][...]
				),
				array(// Dimensio[3] [...] [...]
					array("22 març 2021", "28 maig 2025"), // [3][0][...]
					array("22 març 2020", "28 maig 2022"), // [3][1][...]
					array("22 març 2022", "28 maig 2024"), // [3][2][...]
					array("22 març 2023", "28 maig 2025"), // [3][3][...]
				)
			);
			//visualitzem els continguts
			echo "dates[3][2][0]: " . $dates[3][2][0] . "<br>";

			echo "Contracte del dia: " . $dates[0][0][0] . " al dia: " . $dates[0][0][1] . "<br>";
			echo "Contracte del dia: " . $dates[0][1][0] . " al dia: " . $dates[0][1][1] . "<br>";
			echo "Contracte del dia: " . $dates[1][0][0] . " al dia: " . $dates[1][0][1] . "<br>";
			echo "Contracte del dia: " . $dates[1][1][0] . " al dia: " . $dates[1][1][1] . "<br>";
			echo "Contracte del dia: " . $dates[2][0][0] . " al dia: " . $dates[2][0][1] . "<br>";
			echo "Contracte del dia: " . $dates[3][0][0] . " al dia: " . $dates[3][0][1] . "<br>";
			echo "Contracte del dia: " . $dates[3][1][0] . " al dia: " . $dates[3][1][1] . "<br>";
			echo "Contracte del dia: " . $dates[3][2][0] . " al dia: " . $dates[3][2][1] . "<br>";
			echo "Contracte del dia: " . $dates[3][3][0] . " al dia: " . $dates[3][3][1] . "<br>";
			var_dump($dates);
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