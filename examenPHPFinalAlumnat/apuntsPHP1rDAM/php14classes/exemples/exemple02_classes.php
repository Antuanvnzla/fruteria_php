<?php
//definim una constant fora de la classe
const INSTITUT = "IES Lluís Simarro";
//definició de la classe en un fitxer dedicat Producte.php
include "Producte.php";
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple classes 02</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple classes 02</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Producte</h2>
						<?php
							echo "Instanciem un nou Producte: <br>";
							$p1 = new Producte(); // Instanciem la classe Producte
							$p1->id = 1; //Intentem donar valor directament als atributs
							//però com que està definit com a privat, no podem accedir.
							//ho hem de fer amb els setters
							$p1->setId(1);
							$p1->setPreu(300);
							$p1->setNom("Producte 1");
							echo "Amb els valors: <br>";

							//intentem accedir als valors directament
							echo "Id: ".$p1->id."<br>";
							//però com que estan definits com a privat, no podem.
							//ho hem de fer amb els getters
							echo "Id: ".$p1->getId()."<br>";
							echo "Preu: ".$p1->getPreu()."<br>";
							echo "Nom: ".$p1->getNom()."<br>";

							//Visualitzem els valors de les constants,;
							echo "Valors de les constants: <br>";
							echo "Constant definida en la classe: Fabricant ".(Producte::FABRICANT)."<br>";
							echo "Constant definida fora de la classe: Institut ".(INSTITUT)."<br>";
              //eliminem el producte
              unset($p1);
              //el creem de nou
              //$p1=new Producte("Producte",300,2);
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
