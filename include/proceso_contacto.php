<?php
    $email = trim($_POST['email']);
    $asunto = trim($_POST['asunto']);
    $mensaje = trim($_POST['mensaje']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Verduleria Online</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <img src="images/cherry.png" alt="Cherry" class="left-icon">
        <h1>Projecte PHP Entorns</h1>
        <h2>Fruiteria Verduleria Online</h2>
        <img src="images/apple.png" alt="Apple" class="right-icon">
    </header>

     <!-- Menú de navegación -->
    <nav>
        <?php include 'partials/navegacion.php' ?>       
    </nav>
    <?php

        echo "<div class='texto1'><strong>Email: </strong>$email</div><br><br>";
        echo "<div class='texto1'><strong>Asunto: </strong>$asunto</div><br><br>";
        echo "<div id='texto2'><strong>Mensaje: </strong>$mensaje</div><br><br>";
    ?>
       <!-- Pie de página -->
    <footer>
        <p>IES Lluis Simarro Lacabra - Desenvolupament d'aplicacions multiplataforma</p>
        <p>Curs 24/25</p>
    </footer>
</body>
</html>
