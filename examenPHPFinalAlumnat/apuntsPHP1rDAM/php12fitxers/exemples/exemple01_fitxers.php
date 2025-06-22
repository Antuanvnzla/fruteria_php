<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Exemple Fitxers 01</title>
   <link rel="stylesheet" href="estils.css">
</head>

<body>
   <header id="cap">
      <h1>Exemple Fitxers</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Exemple 01:<br>Llegir una línia d'un fitxer</h2>
         <pre class="codi">
// Llegim la primera línia de fitxer.txt
$fp = fopen("fitxer.txt", "r");
// fitxer.txt ha d'estar a la mateixa carpeta que el fitxer php
$linia = fgets($fp);
$linia2 = fgets($fp);
//fitxer.txt és un arxiu de text normal creat amb notepad.
fclose($fp);
//mostrem en pantalla:
echo "La línia 1 llegida del fitxer és: " . $linia;
echo "La línia 2 llegida del fitxer és: " . $linia2;            
         </pre>
         <?php // Exemple
         // Llegim la primera línia de fitxer.txt
         $fp = fopen("fitxer.txt", "r");
         // fitxer.txt ha d'estar a la mateixa carpeta que el fitxer php
         $linia = fgets($fp);
         $linia2 = fgets($fp);
         //fitxer.txt és un arxiu de text normal creat amb notepad.
         fclose($fp);
         //mostrem en pantalla:
         echo "La línia 1 llegida del fitxer és: " . $linia . "<br>";
         echo "La línia 2 llegida del fitxer és: " . $linia2 . "<br>";
         ?>
      </div>

      <div class="tauler">
         <h2>Exemple 02<br>Llegir un fitxer de text complet</h2>
         <pre class="codi">
//Llegirem línia a línia fitxer.txt fins a la fi (feof ($fp))
$fp = fopen("fitxer.txt", "r");
while (!feof($fp)) {
$linia = fgets($fp);
echo $linia . "<br>";
}
fclose($fp);
</pre>
         <?php
         //Llegirem línia a línia fitxer.txt fins a la fi (feof ($fp))
         $fp = fopen("fitxer.txt", "r");
         while (!feof($fp)) {
            $linia = fgets($fp);
            echo $linia . "<br>";
         }
         fclose($fp);
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