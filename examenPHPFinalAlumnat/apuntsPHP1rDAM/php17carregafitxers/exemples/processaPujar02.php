<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Pujar Fitxer</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple Pujar fitxer 02</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <p>
                <?php
                //obtenim fitxer que ha carregat l'usuari
                //es guarda a la carpeta fitxers_pujats, dins de la carpeta on es troba el fitxer processaPujar02.php
                //aquesta carpeta ha d'existir prèviament i tindre permissos
                if (!file_exists("fitxers_pujats")) { //utilitzem funcions php per comprovar si existeix
                    mkdir("fitxers_pujats");
                    chmod("fitxers_pujats", 0755);
                }
                if (move_uploaded_file($_FILES['fitxer']['tmp_name'], 'fitxers_pujats/' . $_FILES['fitxer']['name'])) {
                    echo "El fitxer " . $_FILES["fitxer"]["name"] . " s'ha pujat correctament.<br>";
                    //canviem els permisos del fitxer
                    chmod('fitxers_pujats/' . $_FILES['fitxer']['name'], 0644);
                    echo "<hr>";
                    echo "<h2> La informació del fitxer </h2>";
                    echo "<p><strong>Nom</strong>: " . $file_name = $_FILES['fitxer']['name'] . "<br>";
                    echo "<strong>Nom Temporal</strong>: " . $file_name = $_FILES['fitxer']['tmp_name'] . "<br>";
                    echo "<strong>Mida</strong>: " . $file_size = $_FILES['fitxer']['size'] . " Bytes<br>";
                    echo "<strong>Tipus Mime</strong>: " . $file_type = $_FILES['fitxer']['type'] . "</p>";

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