<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemple arrays 02</title>
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id="cap">
			<h1>Exemple arrays 02:<br> Eliminar elements d'un array</h1>
		</header>
		<main id="contingut">

			<div class="tauler">
				<h2>Declaració d'array</h2>
				<pre class="codi">
$array = ["a","b","c","d","e","f","g"];
var_dump($array);
echo "&lt;br&gt;"
$array2 = ["index1"=>"a","index2"=>"b","index3"=>"c","index4"=>"d"];
var_dump($array);
			</pre>
				<p>
					<?php
					$array = ["a","b","c","d","e","f","g"];
					var_dump($array);
					echo "<br>";
					$array2 = ["index1"=>"a","index2"=>"b","index3"=>"c","index4"=>"d"];
					var_dump($array2);

					?>
				</p>
			</div>


			<div class="tauler">
				<h2>Eliminar elements d'un array 01: unset()</h2>
				<pre class="codi">
unset($array[1]); //volem eliminar l'element amb índex 1
echo "Eliminat l'element 1 amb &lt;strong&gt;unset()&lt;/strong&gt;:&lt;br&gt;";
var_dump($array);
//reindexem i visualitzem
echo "&lt;br&gt;Reindexem amb &lt;strong&gt;array_values()&lt;/strong&gt;:&lt;br&gt;";
$array=array_values($array);
var_dump($array);
//provem amb un array indexat
unset($array2["index2"]); //volem eliminar l'element amb índex index2
echo "&lt;br&gt;Eliminat l'element index2 amb &lt;strong&gt;unset()&lt;/strong&gt;:&lt;br&gt;";
var_dump($array2);
//reindexem i visualitzem
echo "&lt;br&gt;Reindexem amb &lt;strong&gt;array_values()&lt;/strong&gt;:&lt;br&gt;";
$array2=array_values($array2);
var_dump($array2);	
			</pre>
				<p>
					<?php
					//amb unset per eliminar un element
					unset($array[1]); //volem eliminar l'element amb índex 1
					echo "Eliminat l'element 1 amb <strong>unset()</strong>:<br>";
					var_dump($array);
					//reindexem i visualitzem
					echo "<br>Reindexem amb <strong>array_values()</strong>:<br>";
					$array = array_values($array);
					var_dump($array);
					//provem amb l'array indexat
					unset($array2["index2"]); //volem eliminar l'element amb índex index2
					echo "<br>Eliminat l'element index2 amb <strong>unset()</strong>:<br>";
					var_dump($array2);
					//reindexem i visualitzem
					echo "<br>Reindexem amb <strong>array_values()</strong>:<br>";
					$array2 = array_values($array2);
					var_dump($array2);
					?>
				</p>
			</div>
			<div class="tauler">
				<h2>Eliminar elements d'un array 02: array_splice()</h2>
				<pre class="codi">
//utilitzem array_splice
echo "&lt;strong&gt;Sintaxi&lt;/strong&gt;:&lt;br&gt;
array_splice(array_entrada, offset,longitud_a_eliminar, array_reemplaçaments)&lt;br&gt;";
Reordena els índex&lt;br&gt;";
var_dump($array);	
echo "&lt;br&gt;Eliminat l'element 1 amb &lt;strong&gt;array_splice()&lt;/strong&gt;&lt;/h4&gt;";
//eliminem un element a partir de la posició 1 de l’array
array_splice ($array, 1, 1); 
var_dump($array);
//provem amb l'array indexat
$array3 = ["index1"=>"a","index2"=>"b","index3"=>"c"];
echo "&lt;strong&gt;Array indexat&lt;/strong&gt;:&lt;br&gt;";
var_dump($array3);
echo "&lt;br&gt;Deixa els índex sense modificar&lt;br&gt;";
array_splice($array3,1,1); //volem eliminar l'element amb índex index2
echo "Eliminat l'element en la posició 1 amb &lt;strong&gt;array_splice()&lt;/strong&gt;:&lt;br&gt;";
var_dump($array3);			
			</pre>
				<p>
					<?php

					//utilitzem array_splice
					echo "<strong>Sintaxi </strong>:<br>array_splice(array_entrada, offset, longitud_a_eliminar, array_reemplaçaments)<br>";
					echo "Reordena els índex<br>";
					var_dump($array);
					echo "<br>Eliminat l'element 1 amb <strong>array_splice()</strong><br>";
					array_splice($array, 1, 1); //eliminem un element a partir de la posició 1 de l’array
					var_dump($array);
					//provem amb l'array indexat
					$array3 = ["index1"=>"a","index2"=>"b","index3"=>"c"];
					echo "<strong>Array indexat</strong>:<br>";
					var_dump($array3);
					echo "<br>Deixa els índex sense modificar<br>";
					array_splice($array3,1,1); //volem eliminar l'element amb índex index2
					echo "Eliminat l'element en la posició 1 amb <strong>array_splice()</strong>:<br>";
					var_dump($array3);
					?>
				</p>
			</div>
			<div class="tauler">
				<h2>Eliminar elements d'un array 03: array_diff()</h2>
				<pre class="codi">
//utilitzem array_diff
echo "array_diff: elimina els valors indicats de l'array&lt;br&gt;";
No reordena els índex&lt;br&gt;";
var_dump($array);
echo "&lt;br&gt;Eliminats els elements "e" i "f" amb &lt;strong&gt;array_diff()&lt;/strong&gt;&lt;br&gt;";
//eliminem un element a partir de la posició 1 de l’array
$array=array_diff ($array, ["e","f"]); 
var_dump($array);				
			</pre>
				<p>
					<?php
					//utilitzem array_diff
					echo "array_diff: elimina els valors indicats de l'array<br>";
					echo "No reordena els índex<br>";
					var_dump($array);
					echo "<br>Eliminats els elements \"e\" i \"f\" 1 amb <strong>array_diff()</strong><br>";
					$array = array_diff($array, ["e", "f"]); //eliminem un element a partir de la posició 1 de l’array
					var_dump($array);
					?>
				</p>
			</div>
			<div class="tauler">
				<h2>Eliminar elements d'un array 03: array_diff_key</h2>
				<pre class="codi">
//utilitzem array_diff_key
echo "array_diff_key: elimina els índex indicats de l'array&lt;br&gt;";
echo "No reordena els índex&lt;br&gt;";
var_dump($array);
echo "&lt;br&gt;Eliminat els elements 1 i 4 amb &lt;strong&gt;array_diff_key()&lt;/strong&gt;&lt;br&gt;";
//eliminem un element a partir de la posició 1 de l’array
$array=array_diff_key ($array, [1=&gt;"aaaa",4=&gt;"bbbb"]);
var_dump($array);					
			</pre>
				<p>
					<?php
					//utilitzem array_diff_key
					echo "array_diff_key: elimina els índex indicats de l'array<br>";
					echo "No reordena els índex<br>";
					var_dump($array);
					echo "<br>Eliminat els elements 1 i 4 1 amb <strong>array_diff_key()</strong><br>";
					$array = array_diff_key($array, [1 => "aaaa", 4 => "bbbb"]); //eliminem un element a partir de la posició 1 de l’array
					var_dump($array);
					?>
				</p>
			</div>
		</main>
		<footer id="peu">
			<p>
				1r DAM<br>
				Entorns de Desenvolupament<br>
				IES Lluís Simarro.
			</p>
		</footer>
	</body>
</html>

