<?php
// Obtener el apartado de la URL (parámetro GET)
$apartat="inicio";
if(isset($_GET['apartat'])){
    $apartat = $_GET['apartat'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Verduleria Online</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <img src="images/cereza.jpg" alt="Cherry" class="left-icon">
        <h1>Projecte PHP Entorns</h1>
        <h2>Fruiteria Verduleria Online</h2>
        <?php
        include "include/data.partial.php";
        ?>
        <img src="images/manzana.png" alt="Apple" class="right-icon">
    </header>

    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="index.php?apartat=inicio">Inicio</a></li>
            <li><a href="index.php?apartat=registro">Registro</a></li>
            <li><a href="index.php?apartat=contacto">Contacto</a></li>
            <li><a href="index.php?apartat=botica">Botica</a></li>
        </ul>
    </nav>

    <!-- Contenido -->
    <main>
        <?php
        // Cargar contenido según el apartado
        $rutaFitxer = "include/partials/" . $apartat . ".php";
        if (file_exists($rutaFitxer)) {
            include $rutaFitxer;
        } else {
            echo "<section><p>Apartat no trobat. Si us plau, selecciona una opció vàlida del menú.</p></section>";
        }
        ?>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>IES Lluis Simarro Lacabra - Desenvolupament d'aplicacions multiplataforma</p>
        <p>Curs 24/25</p>
    </footer>
</body>
</html>

