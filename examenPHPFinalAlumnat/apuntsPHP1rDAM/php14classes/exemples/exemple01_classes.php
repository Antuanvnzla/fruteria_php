<?php
//definició de la classe en un fitxer dedicat Cotxe.php
include "Cotxe.php";
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple classes 01</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple classes 01</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Cotxe</h2>
						<?php
							$cotxe = new Cotxe(); // Instanciem la classe Cotxe
							$cotxe->color = 'Blau'; // Donem valor a algunes de les propietats
							$cotxe->marca = 'Ford';
							$cotxe->nombre_portes = 4;
                    // $cotxe = new Cotxe('Blau',5,'Mazda',30);
							echo "Instanciem un objecte cotxe, amb els valors: <br>";
							echo "Color: ".$cotxe->color."<br>";
							echo "Marca: ".$cotxe->marca."<br>";
							echo "Portes: ".$cotxe->nombre_portes."<br>";
                     echo "Gasoli: ".$cotxe->gasoli."<br>"; // valor?
                     echo "Contingut de l'objecte:<br>";
                     var_dump($cotxe);					
							$cotxe->plenarDiposit(100); // utilitzem els mètodes
							echo "<br>Gasoli Inicial: ".$cotxe->gasoli."<br>";
                     //accelerem
                     for($i =0;$i<20;$i++){
                        $cotxe->accelerar();
                     }
                     echo "Gasoli Després d'accelerar: ".$cotxe->gasoli."<br>";
                     //canviem atributs
                     $cotxe->color="Roig";
                     $cotxe->marca="Citroën";
                     echo "Canviem atributs <br>";
                     print_r($cotxe);
                     // Creem un altre cotxe
                     unset($cotxe);
                     //print_r($cotxe);
							/*$cotxe = new Cotxe('Blanc',3,'Toyota',60);
                     echo "Instanciem un objecte cotxe, amb els valors: <br>";
							echo "Color: ".$cotxe->color."<br>";
							echo "Marca: ".$cotxe->marca."<br>";
							echo "Portes: ".$cotxe->nombre_portes."<br>";
							echo "Gasoli: ".$cotxe->gasoli."<br>";*/

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
