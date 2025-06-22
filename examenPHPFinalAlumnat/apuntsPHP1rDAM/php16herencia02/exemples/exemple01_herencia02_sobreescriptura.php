<?php
// ??
?>

<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8">
      <title>Exemple Herència II 01</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple Herència II 01</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Videoclub - Suport - BluRay</h2>
						<?php
							$bluray01 = new BluRay("Avatar", 22, 15.5, "240 minuts");
							echo "<strong>". $bluray01->titol. "</strong>";
							echo "<br> Preu: ". $bluray01->getPreuSenseIva(). " Euros";
							echo "<br> IVA inclòs: ". $bluray01->getPreuambIva(). " Euros";
							echo "<br>";
							echo "<br><strong>Característiques</strong><br>";
							echo "<br>".$bluray01->imprimirCaracteristiques();
							echo "<hr>";
							$suport01 = new Suport("Origen", 23, 15.5);
							echo "<strong>". $suport01->titol. "</strong>";
							echo "<br> Preu:  ". $suport01->getPreuSenseIva(). " Euros";
							echo "<br> IVA inclòs:". $suport01->getPreuAmbIva(). " Euros";
							echo "<br>";
							echo "<br><strong>Característiques</strong>:<br>";
							echo "".$suport01->imprimirCaracteristiques();
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
