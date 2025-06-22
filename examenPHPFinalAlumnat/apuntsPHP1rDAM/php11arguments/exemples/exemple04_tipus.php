<?php 
	// si ho comentem, farà conversions interrnes per intentar adaptar els tipus i no provocar errors.
	declare(strict_types = 1); // els tipus esperats són els declarats

	// Declaració de funcions

	//funció 1 :	
    function mostraInt(int $valor): int {
      return $valor;
    }

	//funció 2 :	
	//Funció incorrecta, intenta tornar un float, quan li hem dit que volem un int
	function mostraInt2(int $valor): int {
      return $valor + 5.0;
    }

	// Fi de declaració de funcions
	
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple Paràmetres 04</title>
      <link rel="stylesheet" href="estils.css">
   </head>
   <body>
      <header id="cap">
         <h1>Exemple Paràmetres amb declaració de tipus i valor de retorn</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Paràmetres amb tipus i valor de retorn</h2>
						<?php
								
							// funció correcta
							echo "Resultat de la funció: ".mostraInt(5)."<br>";
							// funció incorrecta
							//echo "Resultat de la funció: ".mostraInt2(10)."<br>";

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
