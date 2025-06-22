<?php
// ??
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8" >
   <title>Exemple Herència II 03</title>
   <link rel="stylesheet" href="estils.css" >
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència II 03</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Classe Abstracta : Animal - Animalet - Gat</h2>
         <?php
         $gat = new Gat();
         echo $gat->so() . "<br>";
         echo $gat->correr() . "<br>";
         echo $gat->dormir() . "<br>";
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