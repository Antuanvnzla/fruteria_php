<?php

// Declaració de funcions

//funció 1 :

function sumaEnters(int $a, int $b)
{
   return $a + $b;
}

//funció 2 :

function sumaEnters2(int $a = 5, int $b = 5)
{
   return $a + $b;
}

// Fi de declaració de funcions

?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Exemple Paràmetres 03</title>
   <link rel="stylesheet" href="estils.css">
</head>

<body>
   <header id="cap">
      <h1>Exemple Paràmetres per defecte i amb declaració de tipus</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Valors amb tipus</h2>
         <?php
         echo '<strong>Funció: function sumaEnters(int $a, int $b)</strong><br/>';
         //crida a la funció amb valors d'arguments amb tipus
         echo "<strong>Amb valors enters 2 i 5:</strong> <br>";
         echo sumaEnters((int) 2, (int) 5) . "<br>";
         echo "<strong>Amb valors float 2.6 i 5.3: </strong> <br>";
         echo sumaEnters(2.6, (float) 5.3) . "<br>";

         ?>
      </div>

      <div class="tauler">
         <h2>Valors predeterminats</h2>
         <?php
         //crida a la funció amb valors d'arguments predeterminats
         echo '<strong> Funció: function sumaEnters2(int $a = 5, int $b = 5)</strong><br>';
         echo "<strong>Valors per defecte dels paràmetres de la funció: 5 i 5 </strong> <br>";
         echo "<strong>Amb valors enters 2 i 5:</strong> <br>";
         echo sumaEnters2( 2,  5) . "<br>";
         echo "<strong>Amb només un valor (10) : </strong> <br>";
         echo sumaEnters2(10) . "<br>";
         echo "<strong>Sense valors:</strong> <br>";
         echo sumaEnters2() . "<br>";

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