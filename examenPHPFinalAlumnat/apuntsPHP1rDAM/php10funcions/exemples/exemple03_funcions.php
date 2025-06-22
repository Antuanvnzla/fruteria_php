<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Exemple funcions 03</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple funcions 03</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <h2>Funcions dins de funcions</h2>
            <?php
				function funcio1()	{
					function funcio2(){
						echo "No existisc fins que es cride a funcio1().<br>";
					}
					echo "Existisc des del moment immediat en què començà el programa.<br>";
				}

			    /* No podem cridar encara a funcio2(), ja que no existeix. */
				//funcio2(); //donaria error, encara no existeix
				funcio1();

				/* Ara podem cridar a funcio2(), el processat de funcio1()
					l'ha feta accessible. */

				funcio2();

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
