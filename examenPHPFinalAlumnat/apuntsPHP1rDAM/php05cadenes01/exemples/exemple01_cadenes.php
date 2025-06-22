<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Exemple cadenes 01</title>
	<link rel="stylesheet" href="estils.css" />
</head>

<body>
	<header id="cap">
		<h1>Exemple cadenes 01</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<h2>strlen</h2>
			<pre class="codi">
$cad="cadena";
echo "Cadena de text: ".$cad";
$n=strlen($cad);
echo "La longitud de la cadena és: $n";
			</pre>
			<p>
				<?php
				$cad = "cadena";
				echo "Cadena de text: " . $cad . "<br/>";
				$n = strlen($cad);
				echo "La longitud de la cadena és: $n <br/>";
				?>
			</p>
		</div>
		<div class="tauler">
			<h2>strlen / mb_strlen</h2>
			<pre class="codi">
$cad="adéu";
echo "Cadena de text: ".$cad;
$n=strlen($cad);
echo "La longitud de la cadena amb strlen és: $n";
$n=mb_strlen($cad);
echo "La longitud de la cadena amb mb_strlen és: $n";
			</pre>
			<p>
			<?php
			$cad = "adéu";
			echo "Cadena de text: " . $cad . "<br/>";
			$n = strlen($cad);
			echo "La longitud de la cadena amb strlen és: $n <br/>";
			$n = mb_strlen($cad);
			echo "La longitud de la cadena amb mb_strlen és: $n <br/>";
			?>
			</p>
		</div>

		<div class="tauler">
			<h2>substr</h2>
			<pre class="codi">
$cad="cadena";
echo "Cadena de text: ".$cad;
$sub1=substr($cad, 2);
$sub2=substr($cad, 2, 2);
echo "La subcadena número u és la següent: $sub1";
echo "La subcadena número dos és la següent: $sub2";
			</pre>
			<p>
			<?php
			$cad = "cadena";
			echo "Cadena de text: " . $cad . "<br/>";
			$sub1 = substr($cad, 2);
			$sub2 = substr($cad, 2, 2);
			echo "La subcadena número u és la següent: $sub1 <br/>";
			echo "La subcadena número dos és la següent: $sub2 <br/>";
			?>
			</p>
		</div>

		<div class="tauler">
			<h2>substr</h2>
			<pre class="codi">
$cad="IES Lluís Simarro";
echo "Cadena de text: ".$cad.;
$sub1=substr($cad,0 ); // La cadena completa
$sub2=substr($cad,0,3 );// subcadena 
$sub3=substr($cad,4,6);// subcadena 
$sub4=substr($cad,10); // subcadena 
echo "La subcadena número u és la següent: $sub1";
echo "La subcadena número dos és la següent: $sub2";
echo "La subcadena número tres és la següent: $sub3";
echo "La subcadena número quatre és la següent: $sub4";
			</pre>
			<p>
			<?php
			$cad = "IES Lluís Simarro";
			echo "Cadena de text: " . $cad . "<br/>";
			$sub1 = substr($cad, 0); // La cadena completa
			$sub2 = substr($cad, 0, 3);// La subcadena 
			$sub3 = substr($cad, 4, 6);// La subcadena 
			$sub4 = substr($cad, 10); // La subcadena 
			echo "La subcadena número u és la següent: $sub1<br/>";
			echo "La subcadena número dos és la següent: $sub2<br/>";
			echo "La subcadena número tres és la següent: $sub3<br/>";
			echo "La subcadena número quatre és la següent: $sub4<br/>";
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>str_word_count</h2>
			<pre class="codi">
$cadena = "Hello world!";
echo "La cadena: $cadena";
echo "Té ".str_word_count("Hello world!")." paraules";
$cadena = "A E I O U";
echo "La cadena: $cadena";
echo "Té ".str_word_count("A E I O U")." paraules";
			</pre>
			<p>
			<?php
			$cadena = "Hello world!";
			echo "La cadena: $cadena <br/>";
			echo "Té " . str_word_count("Hello world!") . " paraules<br/>"; // Mostra 2
			$cadena = "A E I O U";
			echo "La cadena: $cadena <br/>";
			echo "Té " . str_word_count("A E I O U") . " paraules<br/>"; // Mostra 5
			?>
			</p>
		</div>

		<div class="tauler">
			<h2>Concatenar</h2>
			<pre class="codi">
$cad1="Carpe" ;
$cad2="Diem" ;
echo "Cadena de text 1: ".$cad1;
echo "Cadena de text 2: ".$cad2;
$cadt=$cad1.$cad2;
echo "La cadena 1 concatenada amb la cadena 2 és: $cadt" ;
// Concatenem Exemple: amb $cad2 i $cad1
echo "Invertim l'ordre de les cadenes: ".($cad2.$cad1);
			</pre>
			<p>
			<?php
			$cad1 = "Carpe";
			$cad2 = "Diem";
			echo "Cadena de text 1: " . $cad1 . "<br/>";
			echo "Cadena de text 2: " . $cad2 . "<br/>";
			$cadt = $cad1 . $cad2;
			echo "La cadena 1 concatenada amb la cadena 2 és: $cadt <br/>";
			// Concatenem Exemple: amb $cad2 i $cad1
			echo "Invertim l'ordre de les cadenes: " . ($cad2 . $cad1);
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>strpos</h2>
			<pre class="codi">
$paller="Hello world!";
echo "El paller: $paller";
$agulla="world";
echo "L'agulla: $agulla";
echo "Posició de $agulla en $paller :".strpos("Hello world!", "world");

echo "Busquem Hola en Hello world!:"; 
$pos = strpos("Hello world!", "Hola");
if ($pos==false){
 echo "La cadena no s’ha trobat";
}
echo "Busquem Hello en Hello world!:";
$pos = strpos("Hello world!", "Hello");
if ($pos===0){
  echo "La cadena s’ha trobat";
  echo "En la posició: $pos";
 } else{
	echo "La cadena no s’ha trobat";
 }
			</pre>
			<p>
			<?php
			$paller = "Hello world!";
			echo "El paller: $paller<br/>";
			$agulla = "world";
			echo "L'agulla: $agulla<br/>";
			echo "Posició de $agulla en $paller :" . strpos("Hello world!", "world") . "<br/>"; //Mostra 6 
			
			echo "Busquem Hola en Hello world!:<br/>";
			$pos = strpos("Hello world!", "Hola");
			if ($pos == false) {
				echo "La cadena no s’ha trobat<br/>"; // no troba la cadena
			}
			echo "Busquem Hello en Hello world!:<br/>";
			$pos = strpos("Hello world!", "Hello");
			if ($pos === 0) {
				echo "La cadena s’ha trobat<br/>";// troba la cadena en la pos. 0
				echo "En la posició: $pos<br/>";
			} else {
				echo "La cadena no s’ha trobat<br/>";
			}
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>str_replace</h2>
			<pre class="codi">
$busca ="world";
$reemplaca="Dolly";
$cadena="Hello world!";
echo "La cadena inicial: $cadena";
$cadena = str_replace($busca,$reemplaca,$cadena);
echo "La cadena Modificada: $cadena"; 
$cadena="Sargantana";
echo "La cadena $cadena";
$cadena = str_replace("a", "", $cadena); 
echo "Sense les a: $cadena"; 
			</pre>
			<p>
			<?php
			$busca = "world";
			$reemplaca = "Dolly";
			$cadena = "Hello world!";
			echo "La cadena inicial: $cadena<br/>";
			$cadena = str_replace($busca, $reemplaca, $cadena);
			echo "La cadena modificada: $cadena<br/>"; // mostra Hello Dolly!
			$cadena = "Sargantana";
			echo "La cadena $cadena <br/>";
			$cadena = str_replace("a", "", $cadena); //elimina les a minúsucules
			echo "Sense les a: $cadena <br/>"; // mostra Srgntn
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>Explode</h2>
			<pre class="codi">
$cadena = "blau roig verd groc taronja negre";
echo "Cadena de text: ".$cadena;
$colors = explode(" ",$cadena);
echo "Element 0:".$colors[0]";
echo "Element 3:".$colors[3];
//recorreguem l'array de cadenes
echo "Longitud de l'array:".count($colors);
for ($i=0;$i$lt;count($colors);$i++){
	echo "colors[".$i."]:".$colors[$i];
}
			</pre>
			<p>
			<?php
			$cadena = "blau roig verd groc taronja negre";
			echo "Cadena de text: " . $cadena . "<br/>";
			$colors = explode(" ", $cadena);
			echo "Element 0:" . $colors[0] . "<br/>";
			echo "Element 3:" . $colors[3] . "<br/>";
			//recorreguem l'array de cadenes
			echo "Longitud de l'array:" . count($colors) . "<br/>";
			for ($i = 0; $i < count($colors); $i++) {
				echo "colors[" . $i . "]:" . $colors[$i] . "<br/>";
			}
			var_dump($colors);
			?>
			</p>
		</div>
		<div class="tauler">
			<h2>strtolower / strtoupper / strrev</h2>
			<pre class="codi">
$cadena ="IES Lluís Simarro";
echo "La cadena: $cadena";
$cadena = strtolower($cadena);
echo "En minúsucules: $cadena";
$cadena = strtoupper($cadena);
echo "En majúscules: $cadena";
$cadena = "Hola bon dia";
echo " La cadena: $cadena";
$cadena = strrev($cadena);
echo "Invertida: $cadena";
			</pre>
			<p>
			<?php
			$cadena = "IES Lluís Simarro";
			echo "La cadena: $cadena <br/>";
			$cadena = strtolower($cadena);
			echo "En minúsucules: $cadena <br/>";
			$cadena = strtoupper($cadena);
			echo "En majúscules: $cadena <br/>";
			$cadena = "Hola bon dia";
			echo " La cadena: $cadena <br/>";
			$cadena = strrev($cadena);
			echo "Invertida: $cadena <br/>";
			?>
			</p>
		</div>
	</main>
	<footer id="peu">
		<p>
			1r DAM<br />
			Entorns de Desenvolupament<br />
			IES Lluís Simarro<br />
		</p>
	</footer>
</body>

</html>