<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Exemple Fitxers 04</title>
   <link rel="stylesheet" href="estils.css">
</head>

<body>
   <header id="cap">
      <h1>Exemple Fitxers: Altres funcions</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Exemple 01:<br>Ficar un fitxer dins d'un array amb file()</h2>
         <pre class="codi">
$linies = file('fitxer.txt'); //$linies serà un array
// Mostrem el fitxer recorreguent l'array
foreach ($linies as $num_linia => $linia) {
    echo "Línia ".$num_linia.": " .$linia;
}</pre>
         <?php
         $linies = file('fitxer.txt'); //$linies serà un array
         // Mostrem el fitxer recorreguent l'array
         foreach ($linies as $num_linia => $linia) {
            echo "Línia " . $num_linia . ": " . $linia . "<br>";
         }
         ?>
      </div>

      <div class="tauler">
         <h2>Exemple 02:<br>Lectura de fitxer amb file_get_contents()</h2>
         <pre class="codi">
$fitxer = file_get_contents('fitxer.txt');
echo $fitxer;           
         </pre>
         <?php
         $fitxer = file_get_contents('fitxer.txt');
         echo $fitxer;
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