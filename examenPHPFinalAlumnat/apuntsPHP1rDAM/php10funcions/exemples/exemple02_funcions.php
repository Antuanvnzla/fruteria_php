<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exemple funcions 02</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple funcions 02</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <h2>Funcions condicionals</h2>
            <?php
				// Declaració de funcions condicionals

				$condicio = true;

				/* No podem cridar a funcio1() des d'ací ja que no existeix encara,
				però podem cridar a funcio2() */
				//funcio1(); //donaria error
				funcio2();

				if ($condicio) {
					function funcio1() {
						echo "No existisc fins que l'execució del programa arribe ací.<br>";
					}
				}

				/* Ara podem cridar de manera segura a funcio1()
				ja que $condicio s'ha avaluat com a vertader */

				if ($condicio) funcio1();

                

				function funcio2() {
					echo "Existisc des del moment immediat en què començà el programa.<br>";
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