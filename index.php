<?php
session_start();

// Usuario logueado
$usuarioLogueado = $_SESSION['nom'] ?? null;

// Estilo seleccionado por el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['estil'])) {
    $_SESSION['estil'] = $_POST['estil'];
}
$estilCSS = $_SESSION['estil'] ?? 'css/index.css';

// Formatear nombre del usuario
function formatearNombre($nombre) {
    return ucfirst(strtolower($nombre));
}

if (isset($_GET['registro']) && $_GET['registro'] === 'ok') {
    echo "<p style='color:green;'>Usuario registrado correctamente.</p>";
}


// Fecha y hora actual
$fechaActual = date('d/m/Y H:i:s');

// Apartado actual con validación
$apartadosPermitidos = ['inicio', 'registro', 'contacto', 'botica'];
$apartat = $_GET['apartat'] ?? 'inicio';
if (!in_array($apartat, $apartadosPermitidos)) {
    $apartat = 'inicio';
}

// Si es admin
$esAdmin = $_SESSION['admin'] ?? false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Frutería Verdulería Online</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($estilCSS); ?>" />
    <style>
        .mensaje-bienvenida {
            font-weight: bold;
            color: #2a7ae2;
            margin: 10px 0;
        }
        .mensaje-bienvenida .fecha {
            font-weight: normal;
            font-size: 0.9em;
            color: #555;
            margin-right: 10px;
        }
        .formulario_de_logeo {
            margin: 10px 0;
        }
        .formulario_de_logeo input {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<header>
    <img src="images/cereza.jpg" alt="Cherry" class="left-icon" />
    <h1>Projecte PHP Entorns</h1>
    <h2>Frutería Verdulería Online</h2>
        <?php
        include "include/data.partial.php";      // Muestra la fecha y hora
        include "include/partials/css.partial.php"; // Selector de estilos
    ?>

    <?php if ($usuarioLogueado): ?>
        <p class="mensaje-bienvenida">
            <span class="fecha"><?php echo $fechaActual; ?></span>
            Bienvenido, <?php echo formatearNombre(htmlspecialchars($usuarioLogueado)); ?>!
            <a href="include/logout.php"><button>Logout</button></a>
        </p>
    <?php else: ?>
        <section class="formulario_de_logeo">
            <form action="include/proceso_login.php" method="post">
                <input type="email" name="email" placeholder="Correo electrónico" required><br>
                <input type="password" name="password" placeholder="Contraseña" required><br>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </section>
    <?php endif; ?>

    <img src="images/manzana.png" alt="Apple" class="right-icon" />
</header>

<nav>
    <ul>
        <li><a href="index.php?apartat=inicio">Inicio</a></li>
        <li><a href="index.php?apartat=registro">Registro</a></li>
        <li><a href="index.php?apartat=contacto">Contacto</a></li>
        <li><a href="index.php?apartat=botica">Botica</a></li>
    </ul>
</nav>

<main>
    <?php
    $rutaFitxer = "include/partials/" . $apartat . ".php";
    if (file_exists($rutaFitxer)) {
        include $rutaFitxer;
    } else {
        echo "<section><p>Apartado no encontrado. Por favor, selecciona una opción válida del menú.</p></section>";
    }
    ?>
</main>

<footer>
    <p>IES Lluis Simarro Lacabra - Desarrollo de aplicaciones multiplataforma</p>
    <p>Curso 24/25</p>
</footer>
</body>
</html>
