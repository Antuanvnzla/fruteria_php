<?php // Inici de la sessió
$cookie_nom = "usuari";
$cookie_valor_nou = "Rebeca";
setcookie($cookie_nom, $cookie_valor_nou, time() + (86400 * 30), "");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" >
    <title>Pàgina 2 Cookies</title>
    <link rel="stylesheet" href="estils.css" >
</head>

<body>
    <header id="cap">
        <h1>Exemple Cookies 02</h1>
    </header>
    <main id="contingut">
        <div class="tauler">
            <p>
                <?php
                if (!isset($_COOKIE[$cookie_nom])) {
                    echo "Cookie amb nom '" . $cookie_nom . "' no s'ha creat!";
                } else {
                    echo "Cookie '" . $cookie_nom . "' s'ha creat!<br>";
                    echo "El seu valor és: " . $_COOKIE[$cookie_nom];
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