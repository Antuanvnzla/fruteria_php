<?php
  //Exemple per poder tindre diversos constructors
  //amb diferent quantitat de paràmetres
  class Exemple
  {
   function __construct()
   {
     $args = func_get_args();
     $num = func_num_args();
     $f = '__construct'. $num;
     if (method_exists ($this, $f)) {
       call_user_func_array (array ($this, $f), $args);
     }
   }
   function __construct1($a1)
   {
     echo "__construct amb 1 paràmetre amb valor: ". $a1."<br>";
   }
   function __construct2($a1, $a2)
   {
     echo "__construct amb 2 paràmetres amb valors: ". $a1. ",". $a2."<br>";
   }
   function __construct3($a1, $a2, $a3)
   {
     echo "__construct amb 3 paràmetres amb valors: ". $a1. ",". $a2. ",". $a3."<br>";
   }
 }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Exemple classes 04</title>
      <link rel="stylesheet" href="estils.css" >
   </head>
   <body>
      <header id="cap">
         <h1>Exemple classes 04</h1>
      </header>
      <main id="contingut">
				<div class="tauler">
            <h2>Simulació múltiples constructors</h2>
						<?php
							echo "Instanciem nous objectes Exemple amb constructors amb diferent nombre de paràmetres: <br>";
                     echo "new Exemple('a')<br>";
                     echo "new Exemple('a', 'b')<br>";
                     echo "new Exemple('a', 'b', 'c')<br><br>";
                     $obj1 = new Exemple('a');
                     $obj2 = new Exemple('a', 'b');
                     $obj3 = new Exemple('a', 'b', 'c');
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
