<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8"/>
      <title>Exemple +cadenes 01</title>
      <link rel="stylesheet" href="estils.css" />
   </head>
   <body>
      <header id="cap">
         <h1>Exemple +cadenes 01</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>str_replace</h2>
						<?php
							$text = "on deia blanc ara diu negre.";
							echo "La cadena inicial és: $text <br>";
							echo "Realitzem l'operació: <strong>str_replace(\"blanc\",\"blau\",\$text)</strong> <br>";
							echo "El resultat és: ".str_replace("blanc","blau",$text)."<br>" ;
							echo "La cadena continua sent: ".$text."<br>" ; //valor de la variable $text
							echo "Assignem: <strong>\$text = str_replace(\"blanc\",\"blau\",\$text)</strong> <br>";
							$text =str_replace("blanc","blau",$text); //Ara sí canvia el valor de la variable
							echo "La cadena modificada és: $text <br>";
						?>
         </div>

				<div class="tauler">
            <h2>str_replace</h2>
						<?php
							$text="Ella va dir: està millor estudiant que no fent res";
							echo "La cadena inicial és:<br> $text <br>";
							echo "Realitzem l'operació:<br> <strong>str_replace(\"es\", \"**\", \$text, \$reemplaçaments)</strong>"."<br>";
							echo "El resultat és:<br> ".str_replace("es", "**", $text, $reemplaçaments)."<br>" ;
							echo "S'han realitzat: ".$reemplaçaments." Reemplaçaments <br>";

						?>
         </div>

         <div class="tauler">
            <h2>strtoupper - strtolower</h2>
						<?php
							$cadena="AixÒ és una cadena de caràcters";
							echo "La cadena inicial és:<br> $cadena <br>";
							echo "Realitzem l'operació <strong>strtolower(\$cadena)</strong>:<br>".strtolower($cadena)."<br>";
							echo "Realitzem l'operació <strong>strtoupper(\$cadena)</strong>:<br>".strtoupper($cadena)."<br>";
							echo "Per actuar sobre tot l'alfabet: mb_strtoupper(\$cadena,'utf-8') <br>";
							echo "Realitzem l'operació <strong>strtoupper(\$cadena)</strong>:<br>".mb_strtoupper($cadena,'utf-8');
						?>
         </div>
         <div class="tauler">
            <h2>count_chars</h2>
						<?php
						$cadena="hui es dijous";
						echo "La cadena inicial és:<br> $cadena <br>";
						echo "Realitzem l'operació <strong>count_chars(\$cadena,1)</strong>:<br>";
						$meuArray=count_chars($cadena,1);
						foreach($meuArray as $indexNum => $vegades) {
							 echo 'Lletra: '.chr($indexNum).', Trobada  '. $vegades.'  vegades. <br> ';
						}
						?>
         </div>
				 <div class="tauler">
            <h2>substr_count</h2>
						<?php
							$cadena1='Pere Joan Lluís Marc Lluís Pere Joan Lluís Pere';
							echo "La cadena1 és:<br> $cadena1 <br>";
							$cadena2 = 'Lluís';
							echo "La cadena2 és:<br> $cadena2 <br>";
							echo 'Lluís apareix: '.substr_count($cadena1, $cadena2). ' vegades <br>';
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
