<?php 

	// Declaració de funcions

	//funció 1 :
	function fer_cafe ($tipus = "capucino") {
    		return "Fer una tassa de cafè $tipus. <br>";
	}

	//funció 2 : Amb definició incorrecta!!
	function fer_iogurt($tipus = "ensucrat", $sabor) {
		return "Fer un bol de iogurt $tipus de $sabor. <br>";
	}
	//funció 3 : Amb definició correcta!!
	function fer_iogurt2($sabor, $tipus = "ensucrat") {
   		 return "Fer un bol de iogurt $tipus de $sabor. <br>";
	}

	// Fi de declaració de funcions
	
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple Paràmetres 02</title>
      <link rel="stylesheet" href="estils.css">
   </head>
   <body>
      <header id="cap">
         <h1>Exemple Paràmetres de funcions predeterminats</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Valors predeterminats 01</h2>
						<?php
							//crida a la funció amb valors d'arguments predeterminats
							echo fer_cafe();
							echo fer_cafe(null);
							echo fer_cafe("espresso");

						?>
        </div>

				<div class="tauler">
            <h2>Valors predeterminats 02: Incorrecta</h2>
						<?php
							//Crida a la funció definida de manera incorrecta
							echo fer_iogurt("plàtan"); // No funcionarà com s'esperava
						?>
        </div>

				<div class="tauler">
            <h2>Valors predeterminats 03: Correcta</h2>
						<?php
							//Crida a la funció definida de manera correcta
							echo fer_iogurt2("plàtan"); // Funciona com s'esperava
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
