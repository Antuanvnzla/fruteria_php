<?php
// ??
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8" >
   <title>Exemple Herència II 02</title>
   <link rel="stylesheet" href="estils.css" >
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència II 02</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Classe Abstracta - Concreta</h2>
         <?php
         $Classe1 = new ClasseConcreta1;
         $Classe1->imprimir();
         echo $Classe1->valorPrefix('PRE_') . "<br>";

         $Classe2 = new ClasseConcreta2;
         $Classe2->imprimir();
         echo $Classe2->valorPrefix('PRE_') . "<br>";
         echo "<hr>";
         //intentem instanciar la classe abstracta
         $ClasseAbstracta = new ClasseAbstracta(); //error fatal
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