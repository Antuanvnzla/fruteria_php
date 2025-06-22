<?php 

	// Declaració de funcions

	//funció 1
	function mostrarText($text) {
		echo "<strong> El text a mostrar és el següent: </strong>" ;
		echo $text;
		echo "<br/>";
	}

	//funció 2
	function operacions ($n1, $n2, $operacio) {
		$resultat = 0;
		if ($operacio == "Sumar" ) {
			$resultat = $n1 + $n2;
		} else if ($operacio == "Restar" ) {
			$resultat = $n1 - $n2;
		} else if ($operacio == "Multiplicar" ) {
			$resultat = $n1 * $n2;
		}
	return $resultat; // Tornar el resultat final en qualsevol cas
	}	

	//funció 3
	function mostrarTextError(){
		echo "<strong> S'ha produït un error </strong><br>" ;	
	}

	// Fi de declaració de funcions
	
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exemple funcions 01</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple funcions 01</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <h2>mostrarText</h2>
            <?php
							//utilitzant una variable (no té el mateix nom que en la declaració)
				$cadena = "IES Simarro.";
				mostrarText($cadena);
				//utilitzant directament un valor (una cadena)
				mostrarText("Xàtiva.");
			?>
        </div>

        <div class="tauler">
            <h2>operacions</h2>
            <?php
				echo "Operació Multiplicar amb els valors 7 i 5: <br>";
				echo 'operacions(7,5,"Multiplicar") <br>';

				$resultatOperacions=operacions(7,5,"Multiplicar");
							
				echo "<strong>Resultat: ".$resultatOperacions."</strong><br>";

							//utilitzant variables
				$valor1=6;
				$valor2=8;
				$valorOperacio="Restar";
				$resultatOperacions=operacions($valor1,$valor2,$valorOperacio); // si cridem amb menys paràmetres: error

				echo "Operació Restar amb els valors 6 i 8: <br>";
				echo 'operacions(6,8,"Restar") <br>';							
				echo "<strong>Resultat: ".$resultatOperacions."</strong><br>";
							
				//utilitzant directament la funció al mostrar el resultat
				echo "Operació Sumar amb els valors 13 i 25: <br>";
				echo 'operacions(13,25,"Sumar") <br>';							
				echo "<strong>Resultat: ".operacions(13,25,"Sumar")."</strong><br/>";
			?>
        </div>
        <div class="tauler">
            <h2>mostrarTextError</h2>
            <?php
				//cridem la funció sense cap paràmetre:
				for ($i=0;$i<5;$i++){
					mostrarTextError();							
				}
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