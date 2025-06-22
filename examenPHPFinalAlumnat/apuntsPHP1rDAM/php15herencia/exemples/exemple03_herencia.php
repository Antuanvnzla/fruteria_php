<?php
include 'producte_ex3.php';
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8">
   <title>Exemple Herència 03</title>
   <link rel="stylesheet" href="estils.css">
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència 03</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Producte 3</h2>
         <?php
         //creem un producte
         $producte3 = new Producte3(1, "Títol Llibre", 20, "Nom Autor", "Cognom1 Cognom2");
         //no podem accedir al resum (que està definit en Llibre3)
         //echo $producte3->getResum();
         // creem un nou llibre, amb el nou element al constructor: número de pàgines
         $llibre3 = new Llibre3(1, "Títol Llibre", 20, "Nom Autor", "Cognom1 Cognom2", 235);
         echo $llibre3->getResum();
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