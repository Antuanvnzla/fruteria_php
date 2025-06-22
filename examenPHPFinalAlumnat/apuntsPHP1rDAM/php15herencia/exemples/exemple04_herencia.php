<?php
include 'producte_ex4.php';
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8">
   <title>Exemple Herència 04</title>
   <link rel="stylesheet" href="estils.css">
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència 04</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Producte 4</h2>
         <?php
         //creem un producte
         $producte4 = new Producte4(1, "Títol Llibre", 20, "Nom Autor", "Cognom1 Cognom2");
         //podem accedir al resum (que està definit en Producte4)
         echo $producte4->getResum()."<br><br>";
         // creem un nou llibre, amb el nou element al constructor: número de pàgines
         $llibre4 = new Llibre4(1, "Títol Llibre", 20, "Nom Autor", "Cognom1 Cognom2", 345);
         echo $llibre4->getResum()."<br>";
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