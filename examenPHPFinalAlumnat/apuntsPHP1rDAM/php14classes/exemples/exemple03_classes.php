<?php
  //definició de la classe en un fitxer dedicat Producte.php
  include "Producte.php";
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple classes 03</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple classes 03</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Producte</h2>
						<?php
							echo "Instanciem un nou Producte amb el constructor: <br>";
							//sense atributs no en deixa, ja que hem definit un constructor (únic)
							$p1 = new Producte(); // Instanciem la classe Producte
							$p1->setId(1);
							$p1->setPreu(300);
							$p1->setNom("Producte 1");
							//hem d'utilitzar la quantitat d'arguments que hi ha al constructor.
							//$p1 = new Producte(1,"Producte 1"); // Instanciem la classe Producte
							//$p1 = new Producte(1,"Producte 1",400); // Instanciem la classe Producte

							echo "Amb els valors: <br>";

							echo "Id: ".$p1->getId()."<br>";
							echo "Preu: ".$p1->getPreu()."<br>";
							echo "Nom: ".$p1->getNom()."<br>";

							unset($p1); //eliminem l'objecte, s'executa el destructor.
							//Ja no tindrem accés a l'objecte
							//echo "Nom: ".$p1->getNom()."<br>";
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
