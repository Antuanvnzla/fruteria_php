<?php
// ??
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8" >
   <title>Exemple Herència II 04</title>
   <link rel="stylesheet" href="estils.css" >
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència II 04</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Classe Abstracta : Polígon</h2>
         <?php
         //Creem els objectes necessaris
         $quadrat = new Quadrat();
         $rectangle = new Rectangle();
         $triangle = new Triangle();
         //Comprovem la crida a la funció càlcul en cada objecte
         $quadrat->calcul();
         $rectangle->calcul();
         $triangle->calcul();
         ?>
      </div>
   </main>
   <footer id="peu">
      <p>
         1r DAM<br >
         Entorns de Desenvolupament<br >
         Curs 2024/2025<br >
      </p>
   </footer>
</body>

</html>