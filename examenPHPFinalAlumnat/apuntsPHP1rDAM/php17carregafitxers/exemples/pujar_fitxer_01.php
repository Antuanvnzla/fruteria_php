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
            <h2>Exemple Formulari</h2>
            <form id="formulari" method="POST" action="processaPujar01.php" enctype="multipart/form-data"><!-- imprescindible enctype multipart/form-data -->
                <div>
                    <span><label for="fitxer">Puja el teu fitxer</label></span>
                    <span><input type="file" name="fitxer" id="fitxer"></span>
                </div>
                <div>
                    <span><input id="enviar" name="enviar" type="submit" value="Envia"></span>
                </div>
            </form>
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
