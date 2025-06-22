<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Pujar Fitxer</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple Pujar fitxer 01</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <p>
                <?php
						//obtenim fitxer que ha carregat l'usuari
						//si no indiquem una ruta, es guarda a la carpeta on es troba el fitxer processaPujar01.php
				    if (move_uploaded_file($_FILES['fitxer']['tmp_name'],$_FILES['fitxer']['name'])) {
								//canviem els permisos del fitxer
								chmod($_FILES['fitxer']['name'], 0644);
								echo "El fitxer ".$_FILES["fitxer"]["name"]." s'ha pujat correctament.";
						} else {
								echo "Hi ha hagut algun error pujant el fitxer.";
						}
				?>
            </p>
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
