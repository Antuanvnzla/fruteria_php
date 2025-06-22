<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8"/>
      <title>Exemple bucles 01</title>
      <link rel="stylesheet" href="estils.css" />
   </head>
   <body>
      <header id="cap">
         <h1>Exemple bucles 01</h1>
      </header>
      <main id="contingut">
         <div class="tauler">
            <h2>while</h2>
             <pre class="codi">
$comptador = 0; //inicialització variable control
while ($comptador < 10) { //comprovació condició
  echo "Comptador while: $comptador";<br/>
  $comptador++; //modificació variable control
}
             </pre>
             <p>
            <?php
            $comptador = 0; //inicialització variable control
            while ($comptador < 10) { //comprovació condició
                echo "Comptador while: $comptador<br/>";
                $comptador++; //modificació variable control
            }
            ?>
             </p>
         </div>
         <div class="tauler">
            <h2>do - while</h2>
             <pre class="codi">
$comptador = 0; //inicialització variable control
do {
  echo "Comptador do-while: $comptador";<br/>
  $comptador ++; //modificació variable control
} while ($comptador < 10); //comprovació condició
             </pre>
             <p>

            <?php
            $comptador = 0; //inicialització variable control
            do {
                echo "Comptador do-while: $comptador<br/>";
                $comptador ++; //modificació variable control
            } while ($comptador < 10); //comprovació condició
            ?>

             </p>
         </div>
         <div class="tauler">
            <h2>for</h2>
             <pre class="codi">
for ($comptador = 0; //inicialització variable control<br/>
     $comptador < 10; //comprovació condició<br/>
     $comptador++) { //modificació variable control<br/>
  echo "Comptador for: $comptador";<br/>
}
             </pre>
             <p>
            <?php
            for ($comptador = 0; //inicialització variable control
                    $comptador < 10; //comprovació condició
                    $comptador++) { //modificació variable control
                echo "Comptador for: $comptador<br/>";
            }
            ?>
             </p>
         </div>
         <div class="tauler">
            <h2>step (decrement)</h2>
             <pre class="codi">
for ($j = 50; $j>=0; $j-=5) { <br/>
  echo "Variable j: $j";
}
             </pre>
             <p>
            <?php
            for ($j = 50; $j>=0; $j-=5) {
                echo "Variable j: $j <br/>";
            }
            ?>
             </p>
         </div>
         <div class="tauler">
            <h2>step (geomètric)</h2>
             <pre class="codi">
for ($j = 1; $j<100000; $j*=2) { <br/>
  echo "Variable j: $j";
}
             </pre>
             <p>
            <?php
            for ($j = 1; $j<100000; $j*=2) {
               echo "Variable j: $j  <br/>";
             }
            ?>
             </p>
         </div>
      </main>
      <footer id="peu">
         <p>
            1r DAM<br/>
            Entorns de Desenvolupament<br/>
            Curs 2024/2025<br/>
         </p>
      </footer>
   </body>
</html>
