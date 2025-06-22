<?php
// ??
?>

<!DOCTYPE html>
<html lang="ca">

<head>
   <meta charset="utf-8" >
   <title>Exemple Herència II 05</title>
   <link rel="stylesheet" href="estils.css" >
</head>

<body>
   <header id="cap">
      <h1>Exemple Herència II 05</h1>
   </header>
   <main id="contingut">
      <div class="tauler">
         <h2>Interfície : Logger</h2>
         <?php
         //Creem els objectes necessaris
         //provem d'instanciar la interfície
         //$interficie01 = new Logger;
         $missatge = "Hola, bon dia!";
         $log01 = new FileLogger("log.txt", "a");
         $log01->log($missatge);
         echo "<p> Cada vegada que es carrega la pàgina s'afegeix entrada al log</p>";
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