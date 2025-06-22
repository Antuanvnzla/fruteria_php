<?php 

	// Declaració de funcions

	//funció 1 : per valor
	function per_valor($parametre1) {
   //modifiquem el valor de la variable de l’argument definit a la funció
   $parametre1 = "hola"; 
   echo $parametre1."<br>"; //Imprimeix "hola"
	}

	//funció 2 : per referència
	function afegir_alguna_cosa (&$cadena) {
	    $cadena = $cadena.' i alguna cosa més.';
	}
	

	// Fi de declaració de funcions
	
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple Paràmetres 01</title>
      <link rel="stylesheet" href="estils.css">
   </head>
   <body>
      <header id="cap">
         <h1>Exemple Paràmetres de funcions</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Per valor</h2>
						<?php
							//Per valor
							$variable = "açò no canvia";
                     echo "<strong>Valor inicial: </strong>".$variable."<br>";
							echo "<strong>Valor dins de la funció:  </strong>";
                     per_valor($variable);
                     echo "<strong>Valor fora de la funció:  </strong>";
							echo $variable."<br>"; //Imprimeix "açò no canvia"
						?>
        </div>

				<div class="tauler">
            <h2>Per referència</h2>
						<?php
							//Per referència
							$cad ='Això és una cadena,';
                     echo " <strong>Valor abans de la funció:  </strong>" .$cad."<br>";
							afegir_alguna_cosa($cad);
							//el valor de la variable $cad ha sigut modificat en la funció
							echo " <strong>Valor després de la funció:  </strong>" .$cad; // Imprimeix 'Això és una cadena, I alguna cosa més.'
						?>
        </div>
				
      </main>
      <footer id="peu">
         <p>
            1r DAM<br>
            Entorns de Desenvolupament<br>
            Curs 2024/2025<br>
         </p>
      </footer>
   </body>
</html>
