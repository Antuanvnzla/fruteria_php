<?php
include 'producte_ex1.php';
?>

<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8">
      <title>Exemple Herència 01</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple Herència 01</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Producte 1</h2>
						<?php
							//creem un nou producte
							$P1 = new Producte1(1,"Títol llibre",25,'Autor 1','Cognoms');
							//no podem fer ús de getResum, perquè està definida en la classe fill
							//echo $P1->getResum();
							//no podem Accedir directament a un atribut private, necessitem un getter
							//echo "Títol: ".$P1->titol."<br>";
							//accedim amb els getters
							echo "Títol: ".$P1->getTitol()."<br>";
							echo "Preu: ".$P1->getPreu()."<br>";
							echo "Nom de l'autor: ".$P1->getAutor()."<br>";	

							//ara creem un nou llibre, que és descendent de producte
							$llibre1 = new Llibre1 (2, "LLibre 2", 20, "Autor 2", "Cognom1 Cognom2");
                     echo "ID llibre: ".$llibre1->getId()."<br>";
 							echo $llibre1->getResum();
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
