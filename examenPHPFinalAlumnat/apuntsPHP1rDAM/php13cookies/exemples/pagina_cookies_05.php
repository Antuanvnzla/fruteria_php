<?php
// Serialitzem l’array
setcookie("array1", serialize(["Hola", "Adéu"]));
// O utilitzem Json Encode
setcookie("array2", json_encode(["PHP", "Cookies"]));

$array1 = unserialize($_COOKIE["array1"]);
$array2 = json_decode($_COOKIE["array2"]);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" >
	<title>Pàgina 5 Cookies</title>
	<link rel="stylesheet" href="estils.css" >
</head>

<body>
	<header id="cap">
		<h1>Exemple Cookies 05</h1>
		<h3>Arrays</h3>
	</header>
	<main id="contingut">
		<div class="tauler">
			<p>
				<?php // els recuperem de les cookies i els mostrem per pantalla
				// Deserialitzem l’array
				echo "<h3>Array 1</h3>";
				
				var_dump($array1);
				// O utilitzem Json Encode
				echo "<h3>Array 2</h3>";
				
				print_r($array2);
				?>
		</div>
	</main>
	<footer id="peu">
		<p>
			1r DAM<br >
			Entorns de Desenvolupament<br >
			Curs 2024/2025<br >
		</p>
	</footer>
</body>

</html>