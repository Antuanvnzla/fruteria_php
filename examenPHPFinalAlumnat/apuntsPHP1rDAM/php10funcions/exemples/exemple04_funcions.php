<?php
		function recursivitat($a){
				if ($a < 20) {
						echo "$a <br>";
						recursivitat($a + 1);
				}
		}

		function factorial($num){
				if ($num == 0) {
						return 1;
				} else {
						return ($num * factorial($num-1));
				}
		}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exemple funcions 04</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple funcions 04</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <h2>Funcions recursives 01</h2>
            <?php
				//Crida a la funció recursiva
				recursivitat(5);
			?>
        </div>

        <div class="tauler">
            <h2>Funcions recursives 02</h2>
            <?php
				//Crida a la funció recursiva
				echo "Funció factorial recursiva: <br>";
				$n=5;
				$factorial = factorial($n);
				echo "Factorial de $n = $factorial <br>";
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
