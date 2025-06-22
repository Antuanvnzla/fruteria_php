<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8"/>
      <title>Exemple +cadenes 02</title>
      <link rel="stylesheet" href="estils.css" />
   </head>
   <body>
      <header id="cap">
         <h1>Exemple +cadenes 02</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>strlen</h2>
						<?php
							$cadena="hui és divendres";
							echo "La cadena és: $cadena <br>";
							echo "La longitud de la cadena és: ".strlen($cadena)." <br>";
							echo "(Els accents els compta com a 2 caràcters)";
						?>
         </div>

				<div class="tauler">
            <h2>ucfirst</h2>
						<?php
							$salutacio="hui estem a divendres";
							echo "La cadena és: $salutacio <br>";
							echo "La cadena modificada és:<br>".ucfirst($salutacio)." <br>";
						?>
         </div>

				<div class="tauler">
            <h2>ucwords</h2>
						<?php
							$salutacio="hui estem a divendres";
							echo "La cadena és: $salutacio <br>";
							echo "La cadena modificada és:<br>".ucwords($salutacio)." <br>";
						?>

         </div>

         <div class="tauler">
            <h2>strpos</h2>
						<?php
							$salutacio="hui és divendres";
							echo "La cadena és: $salutacio <br>";
							echo "La posició de la subcadena \"és\":<br>".strpos($salutacio, "és")." <br>";
						?>
         </div>
         <div class="tauler">
            <h2>trim</h2>

						<?php
							$salutacio="*** hui és divendres ***";
							echo "La cadena és: $salutacio <br>";
							echo "Executem la instrucció: <strong>trim(\$salutacio,\"*\")</strong><br>";
							echo "El resultat és: ".trim($salutacio, "*")." <br>";
						?>
         </div>
				 <div class="tauler">
            <h2>ltrim</h2>
						<?php
							$salutacio="*** hui és divendres ***";
							echo "La cadena és: $salutacio <br>";
							echo "Executem la instrucció: <strong>ltrim(\$salutacio,\"*\")</strong><br>";
							echo "El resultat és: ".ltrim($salutacio, "*")." <br>";
						?>
         </div>

				 <div class="tauler">
            <h2>rtrim</h2>
						<?php
							$salutacio="*** hui és divendres ***";
							echo "La cadena és: $salutacio <br>";
							echo "Executem la instrucció: <strong>trim(\$salutacio,\"*\")</strong><br>";
							echo "El resultat és: ".rtrim($salutacio, "*")." <br>";
						?>
         </div>

				<div class="tauler">
            <h2>str_repeat</h2>
						<?php
							$salutacio='hola';
							echo "La cadena és: $salutacio <br>";
							echo "Executem la instrucció: <strong>str_repeat(\$salutacio,5)</strong><br>";
							echo "El resultat és: ".str_repeat($salutacio,5)." <br>";
						?>
         </div>

				<div class="tauler">
            <h2>strstr</h2>
						<?php
							$salutacio="hui és divendres";
							echo "La cadena és: $salutacio <br>";
							echo "Executem la instrucció: <strong>strstr(\$salutacio,\"és\", false)</strong><br>";
							echo "El resultat és: ".strstr($salutacio,"és", false)." <br>";
							echo "Executem ara la instrucció: <strong>strstr(\$salutacio,\"és\", true)</strong><br>";
							echo "El resultat és: ".strstr($salutacio,"és", true)." <br>";
						?>
         </div>

      </main>
      <footer id="peu">
         <p>
            1r DAM<br>
            Entorns de Desenvolupament<br>
            IES Simarro<br>
         </p>
      </footer>
   </body>
</html>
