<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemple arrays 01</title>
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id="cap">
			<h1>Exemple arrays 01: Declaracio d'arrays</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<h2>Mètode de declaració d'array 01</h2>
				<pre class="codi">
$estacio[1] = "Estiu";
$estacio[2] = "Tardor";
$estacio[3] = "Hivern";
//$estacio[4] = true;
//$estacio[5] = false;
//$estacio[6] = 4.56;
//$estacio[7] = 390;
//var_dump($estacio);
echo "Valor de l'element 2 de l'array estació: ".$estacio[2];
				
//recorreguem l'array estació
echo "Longitud de l'array estacio[]:".count($estacio);
for ($i=0;$i&lt;count($estacio);$i++){
 echo "estacio[".$i."]:".$estacio[$i];
}

$nom[0] = 7;
$nom[1] = 11;
$nom[2] = 15;
echo "Valor de l'element 1 de l'array nom: ".$nom[1];

//recorreguem l'array nom
echo "Longitud de l'array nom[]:".count($nom);
for ($i=0;$i&lt;count($nom);$i++){
 echo "nom[".$i."]:".$nom[$i];
}
</pre>
<p>
						<?php
						$estacio[0] = "Primavera";
						$estacio[1] = "Estiu";
						$estacio[2] = "Tardor";
						$estacio[3] = "Hivern";
						//$estacio[4] = true;
						//$estacio[5] = false;
						//$estacio[6] = 4.56;
						//$estacio[7] = 390;
						var_dump($estacio);
						echo "<br>";
						echo "Valor de l'element 2 de l'array estació: " . $estacio[2] . "<br>";

						//recorreguem l'array estació
						echo "Longitud de l'array estacio[]:" . count($estacio) . "<br>";
						for ($i = 0; $i < count($estacio); $i++) {
							echo "estacio[" . $i . "]:" . $estacio[$i] . "<br>";
						}

						$nom[0] = 7;
						$nom[1] = 11;
						$nom[2] = 15;
						echo "Valor de l'element 1 de l'array nom: " . $nom[1] . "<br>";

						//recorreguem l'array nom
						echo "Longitud de l'array nom[]:" . count($nom) . "<br>";
						for ($i = 0; $i < count($nom); $i++) {
							echo "nom[" . $i . "]:" . $nom[$i] . "<br>";
						}
						?>
						</p>
		</div>
		<div class="tauler">
			<h2>Mètode de declaració d'array 02</h2>
			<pre class="codi">
$ciutat[] = "Xàtiva";
$ciutat[] = "Canals";
$ciutat[] = "Genovés";
$ciutat[] = "La Llosa";
//podem saltar índex en declarar els elements d'un array
$ciutat[10] = "Novetlè";
$ciutat[] = "Benigànim";
echo "Valor de l'element 3 de l'array ciutat: ".$ciutat[3];
//mostrem el valor de la variable $ciutat
var_dump($ciutat);
			</pre>
			<p>
						<?php
						$ciutat[] = "Xàtiva";
						$ciutat[] = "Canals";
						$ciutat[] = "Genovés";
						$ciutat[] = "La Llosa";
						//podem saltar índex en declarar els elements d'un array
						$ciutat[10] = "Novetlè";
						$ciutat[] = "Benigànim";
						echo "Valor de l'element 3 de l'array ciutat: " . $ciutat[3] . "<br>";
						//mostrem el valor de la variable $ciutat
						var_dump($ciutat);
						?>
			</p>
		 </div>

		 <div class="tauler">
			<h2>Mètode de declaració d'array 03 i 04</h2>
			<pre class="codi">
$color = array("blau" , "verd" , "negre" , "marró");
var_dump($color);
echo "Valor de l'element 3 de l'array color: ".$color[3];
//també es pot definir així:
$color = ["roig" , "blau" , "groc" , "verd"];
//mostrem el valor de la variable $color
var_dump($color);
echo "Valor de l'element 3 de l'array color: ".$color[3]";
			</pre>
			<p>
						<?php
						$color = array("blau", "verd", "negre", "marró");
						var_dump($color);
						echo "<br>Valor de l'element 3 de l'array color: " . $color[3] . "<br>";
						//també es pot definir així:
						$color = ["roig", "blau", "groc", "verd"];
						//mostrem el valor de la variable $color
						var_dump($color);
						echo "<br>Valor de l'element 3 de l'array color: " . $color[3] . "<br>";

						?>
			</p>
		 </div>
		 <div class="tauler">
			<h2>Mètode de declaració d'array 05</h2>
			<pre class="codi">
//$array = array("a","b","c","d","e","f","g");
//altra manera de crear-lo, array indexat:
$array = [0 =&gt; "a", 1 =&gt; "b", 2 =&gt; "c",3 =&gt; "d", 4 =&gt; "e", 5 =&gt; "f", 6 =&gt; "g"];
var_dump($array);
			
			</pre>
			<p>
						<?php
						//$array = array("a","b","c","d","e","f","g");
						//altra manera de crear-lo, array indexat:
						$array = [0 => "a", 1 => "b", 2 => "c", 3 => "d", 4 => "e", 5 => "f", 6 => "g"];
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

