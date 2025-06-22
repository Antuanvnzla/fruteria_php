<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8" >
	<title>Exemple count arrays Multidimensionals</title>
	<link rel="stylesheet" href="estils.css" >
</head>

<body>
	<header id="cap">
		<h1>Exemple count arrays Multidimensionals</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
		<h2>count</h2>
			<pre class="codi menor">
$array1[6] = 99;
$array1[22] = 87;
echo "La quantitat d'elements d’array1 és: " . count($array1) . "&lt;br&gt;";
echo "&lt;br&gt;";
$array2[0][0][0] = "prova1";
$array2[0][0][1] = "prova2";
$array2[0][0][2] = "prova3";
$array2[0][1][0] = "prova4";
$array2[0][1][1] = "prova5";
$array2[1][0][1] = "prova6";
$array2[1][1][2] = "prova7";
$array2[1][2][1] = "prova8";
$array2[2][0][0] = "prova9";
$array2[2][0][1] = "prova10";
$array2[5][0][1] = "prova11";

echo "Nombre d'índexs 1r nivell: " . count($array2) . "&lt;br&gt;";
echo "Nombre d'índexs 2n nivell array2[0]: " . count($array2[0]) . "&lt;br&gt;";
echo "Nombre d'índexs 2n nivell array2[1]: " . count($array2[1]) . "&lt;br&gt;";
echo "Nombre d'índexs 2n nivell array2[2]: " . count($array2[2]) . "&lt;br&gt;";
echo "Nombre d'índexs 2n nivell array2[3]: " . count($array2[3]) . "&lt;br&gt;"; //no existeix
echo "Nombre d'índexs 2n nivell array2[5]: " . count($array2[5]) . "&lt;br&gt;";
echo "Nombre d’índexs 3r nivell array2[0][0]: " . count($array2[0][0]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[0][1]: " . count($array2[0][1]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[1][0]: " . count($array2[1][0]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[1][1]: " . count($array2[1][1]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[1][2]: " . count($array2[1][2]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[2][0]: " . count($array2[2][0]) . "&lt;br&gt;";
echo "Nombre d'índexs 3r nivell array2[5][0]: " . count($array2[5][0]) . "&lt;br&gt;";
			</pre>
			<p>
			<?php
			$array1[6] = 99;
			$array1[22] = 87;
			echo "La quantitat d'elements d’array1 és: " . count($array1) . "<br>";
			echo "<br>";
			$array2[0][0][0] = "prova1";
			$array2[0][0][1] = "prova2";
			$array2[0][0][2] = "prova3";
			$array2[0][1][0] = "prova4";
			$array2[0][1][1] = "prova5";
			$array2[1][0][1] = "prova6";
			$array2[1][1][2] = "prova7";
			$array2[1][2][1] = "prova8";
			$array2[2][0][0] = "prova9";
			$array2[2][0][1] = "prova10";
			$array2[5][0][1] = "prova11";

			echo "Nombre d'índexs 1r nivell: " . count($array2) . "<br>";
			echo "Nombre d'índexs 2n nivell array2[0]: " . count($array2[0]) . "<br>";
			echo "Nombre d'índexs 2n nivell array2[1]: " . count($array2[1]) . "<br>";
			echo "Nombre d'índexs 2n nivell array2[2]: " . count($array2[2]) . "<br>";
			//error: no existeix
			echo "Nombre d'índexs 2n nivell array2[3]: " . count($array2[3]) . "<br>"; //no existeix l'índex
			echo "Nombre d'índexs 2n nivell array2[5]: " . count($array2[5]) . "<br>";
			echo "Nombre d’índexs 3r nivell array2[0][0]: " . count($array2[0][0]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[0][1]: " . count($array2[0][1]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[1][0]: " . count($array2[1][0]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[1][1]: " . count($array2[1][1]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[1][2]: " . count($array2[1][2]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[2][0]: " . count($array2[2][0]) . "<br>";
			echo "Nombre d'índexs 3r nivell array2[5][0]: " . count($array2[5][0]) . "<br>";
			?>
			</p>
		</div>

		<div class="tauler">
		<h2>count</h2>
			<pre class="codi menor">
$array3[0][0] = "U";
$array3[0][1] = "Dos";
$array3[1][0] = "Tres";
$array3[1][1] = "Quatre";
/* bucle per recórrer un array de 2 dimensions amb índex consecutius */
for ($i = 0; $i < count($array3); $i++) { //per al primer nivell de l’array
  for ($j = 0; $j < count($array3[$i]); $j++) { //per al segon nivell
   echo "Valor [" . $i . "][" . $j . "]: " . $array3[$i][$j] . "&lt;br&gt;";
  }
}
echo "&lt;br&gt;";
//per reinicialitzar l'array:
$array3 = array();
$array3[0][0][0] = "Cinc";
$array3[0][0][1] = "Sis";
$array3[0][0][2] = "Set";
$array3[0][1][0] = "Huit";
$array3[0][1][1] = "Nou";
/* bucle per recórrer un array de 3 dimensions amb índex consecutius */
for ($i = 0; $i < count($array3); $i++) {//per al primer nivell de l’array
  for ($j = 0; $j < count($array3[$i]); $j++) {//per al segon nivell 
    for ($k = 0; $k < count($array3[$i][$j]); $k++) {//per al tercer nivell 
      echo "Valor [".$i."][".$j."][".$k."]: " . $array3[$i][$j][$k] . "&lt;br&gt;";
    }
  }
}
			</pre>
			<p>
			<?php
			$array3[0][0] = "U";
			$array3[0][1] = "Dos";
			$array3[1][0] = "Tres";
			$array3[1][1] = "Quatre";
			/* bucle per recórrer un array de 2 dimensions amb índex consecutius */
			for ($i = 0; $i < count($array3); $i++) { //per al primer nivell de l’array
				for ($j = 0; $j < count($array3[$i]); $j++) { //per al segon nivell
					echo "Valor [" . $i . "][" . $j . "]: " . $array3[$i][$j] . "<br>";
				}
			}
			echo "<br>";
			//per reinicialitzar l'array:
			$array3 = array();
			$array3[0][0][0] = "Cinc";
			$array3[0][0][1] = "Sis";
			$array3[0][0][2] = "Set";
			$array3[0][1][0] = "Huit";
			$array3[0][1][1] = "Nou";

			/* bucle per recórrer un array de 3 dimensions amb índex consecutius */
			for ($i = 0; $i < count($array3); $i++) {//per al primer nivell de l’array
				for ($j = 0; $j < count($array3[$i]); $j++) {//per al segon nivell 
					for ($k = 0; $k < count($array3[$i][$j]); $k++) {//per al tercer nivell 
						echo "Valor [" . $i . "][" . $j . "][" . $k . "]: " . $array3[$i][$j][$k] . "<br>";
					}
				}
			}
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