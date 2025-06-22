<!DOCTYPE html>
<html lang="ca">
   <head>
      <meta charset="utf-8"/>
      <title>Exemple +cadenes 03</title>
      <link rel="stylesheet" href="estils.css" />
   </head>
   <body>
      <header id="cap">
         <h1>Exemple +cadenes 03</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>strcmp</h2>
						<?php
							$cadena1='1e3'; $cadena2='1000';
							echo "La cadena1 és: ".$cadena1."<br>";
							echo "La cadena2 és: ".$cadena2."<br>";
							if($cadena1==$cadena2) {
								echo 'Segons == les dues cadenes són iguals <br>';
							} else {
								echo 'Segons == les dues cadenes NO són iguals <br>';
							}
							 
							if($cadena1 === $cadena2) {
								echo 'Segons === les dues cadenes són iguals <br>';
							} else {
							echo 'Segons === les dues cadenes NO són iguals <br>';
							}
	
							if(strcmp($cadena1,$cadena2) == 0) {
								echo 'Segons strcmp les dues cadenes són iguals <br>';
							} else {
								echo 'Segons strcmp les dues cadenes NO són iguals <br>';
							}
						?>
         </div>

				<div class="tauler">
            <h2>strcasecmp</h2>
						<?php
							$cadena1='dimarts';
							$cadena2='Dimarts';
							echo "La cadena1 és: ".$cadena1."<br>";
							echo "La cadena2 és: ".$cadena2."<br>";							
							echo "Executem la instrucció: <strong>strcasecmp(\$cadena1, \$cadena2)</strong> <br>";
							echo "El resultat és: ".strcasecmp($cadena1, $cadena2)." <br>";
							echo "0: iguals -- >0; cadena2>cadena1 -- <0; cadena1>cadena2 <br>";
						?>
         </div>

				<div class="tauler">
            <h2>str_pad</h2>
						<?php
							$cadena = 'iessimarro.com';
							echo "La cadena és: $cadena <br>";
							echo '<p>'.str_pad($cadena, 28, '*').'</p>';
							echo '<p>'.str_pad($cadena, 48, ' Xàtiva').'</ p>';
							echo '<p>'.str_pad($cadena, 28, '-', STR_PAD_LEFT).'</p>';
							echo '<p>'.str_pad($cadena, 28, '*', STR_PAD_RIGHT).'</p>';
							echo '<p>'.str_pad($cadena, 29, '@', STR_PAD_BOTH).'</p>';
						?>

         </div>
      </main>
      <footer id="peu">
         <p>
            1r DAM<br>
            Entorns de Desenvolupament<br>
            IES Simarro<br>
         </p>
      </footer>
   </body>
</html>
