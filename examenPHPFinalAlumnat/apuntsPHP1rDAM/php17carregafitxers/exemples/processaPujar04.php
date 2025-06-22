<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <title>Pujar Fitxer</title>
    <link rel="stylesheet" href="estils.css">
</head>

<body>
    <header id="cap">
        <h1>Exemple Pujar fitxer 04</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <p>
                <?php
                //obtenim fitxer que ha carregat l'usuari
                //es guarda a la carpeta fitxers_pujats, dins de la carpeta on es troba el fitxer processaPujar04.php
                //aquesta carpeta ha d'existir prèviament i tindre permissos
                if (!file_exists("fitxers_pujats")) { //utilitzem funcions php per comprovar si existeix
                    mkdir("fitxers_pujats");
                    chmod("fitxers_pujats", 0755);
                }
                if (isset($_FILES['fitxer']) && !empty($_FILES['fitxer']['name'])) {
                    //obtenim la quantitat de fitxers que s’han carregat
                    $n_fitxers = count($_FILES['fitxer']['name']);
                    echo "Nombre de fitxers pujats: " . $n_fitxers . "<br>";
                    for ($i = 0; $i < $n_fitxers; $i++) {
                        move_uploaded_file($_FILES['fitxer']['tmp_name'][$i], "fitxers_pujats/".$_FILES['fitxer']['name'][$i]);
                        echo "El fitxer " . $_FILES["fitxer"]["name"][$i] . " s'ha pujat correctament.<br>";
                        //canviem els permisos del fitxer
                        chmod("fitxers_pujats/".$_FILES['fitxer']['name'][$i], 0644);
                    }


                    //podem mostrar el contingut de la carpeta:
                    $fitxers = scandir("fitxers_pujats");
                    echo "Contingut del directori <strong>fitxers_pujats</strong>:<br>";
                    echo '<span class="llistatDirectori">';
                    for ($i = 0; $i < count($fitxers); $i++) {
                        if (is_dir($fitxers[$i])) {
                            //és un directori
                            echo "DIR: <strong>" . $fitxers[$i] . "</strong><br>";
                        } else {
                            //és un fitxer
                            echo "FITXER: <strong>" . $fitxers[$i] . "</strong> " . filesize("fitxers_pujats/" . $fitxers[$i]) . " bytes<br>";
                        }
                    }
                    echo '</span>';
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