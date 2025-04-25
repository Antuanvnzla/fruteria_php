<?php
session_start();

// Canviar l'estil si s'ha enviat per POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['estil'])) {
    $_SESSION['estil'] = $_POST['estil'];
}

// Determinar quin fitxer CSS utilitzar
$estilCSS = isset($_SESSION['estil']) ? $_SESSION['estil'] : 'css/index.css';

// Obtener el apartado de la URL (parámetro GET)
$apartat = "inicio";
if (isset($_GET['apartat'])) {
    $apartat = $_GET['apartat'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Verduleria Online</title>
    <link rel="stylesheet" href="<?php echo $estilCSS; ?>">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <img src="images/cereza.jpg" alt="Cherry" class="left-icon">
        <h1>Projecte PHP Entorns</h1>
        <h2>Fruiteria Verduleria Online</h2>
        <?php
        include "include/data.partial.php";      // Mostra la data i hora
        include "include/partials/css.partial.php";       // Selector d'estils
        ?>
        <img src="images/manzana.png" alt="Apple" class="right-icon">

        <div class="formulario_de_logeo">
            <?php if ($usuarioLogueado): ?>
                <p>Hola <?php echo htmlspecialchars($usuarioLogueado); ?>!<br> : <?php echo ucfirst($fechaActual); ?> :
                    <a href="include/logout.php"><button>Logout</button></a>
                </p>
            <?php else: ?>
                <form action="include/proceso_login.php" method="post">
                    <input type="email" name="email" placeholder="Correo electrónico" required><br>
                    <input type="password" name="password" placeholder="Contraseña" required><br>
                    <button type="submit">Iniciar Sesión</button>
                </form>
            <?php endif; ?>
        </div>

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
