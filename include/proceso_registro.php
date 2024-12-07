 <?php
/*// Obtener el apartado de la URL (parámetro GET)
$apartat="inicio";
if(isset($_GET['apartat'])){
    $apartat = $_GET['apartat'];
}
*/?> 
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
        <ul>
            <li><a href="../index.php?apartat=inicio">Inicio</a></li>
            <li><a href="../index.php?apartat=registro">Registro</a></li>
            <li><a href="../index.php?apartat=contacto">Contacto</a></li>
            <li><a href="../index.php?apartat=botiga">Botica</a></li>
        </ul>
    </nav>

    <!-- Contenido -->
    <main>
    <h2>Datos Enviados</h2>
    <div style="background-color: #fffbcc; border: 2px solid #cccc99; padding: 15px; border-radius: 10px;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $action = isset($_POST['action']) ? $_POST['action'] : "sin accion";

            if ($action == "enviar") {
                $sinValor = "Sin valor";

                  // Capturar y validar cada campo
                $nom = htmlspecialchars($_POST['nombre']);
                $apellido = $_POST['apellido'] != null ? htmlspecialchars($_POST['apellido']) : $sinValor;
                $direccion = $_POST['direccion'] != null ? htmlspecialchars($_POST['direccion']) :  $sinValor;
                $email =  htmlspecialchars($_POST['email']);
                $contrasena = $_POST['password'] != null ? htmlspecialchars($_POST['password']) : $sinValor;
                $poblacion = $_POST['poblacion'] != null ? htmlspecialchars($_POST['poblacion']) : $sinValor;
                $telefono = $_POST['telefono'] != null ? htmlspecialchars($_POST['telefono']) : $sinValor;
                $horario = $_POST['horario'] ? htmlspecialchars($_POST['horario']) : $sinValor;

                // Mostrar los datos procesados 
                echo "<p><strong>Nombre:</strong> $nom</p>";
                echo "<p><strong>Apellido:</strong> $apellido</p>";
                echo "<p><strong>Dirección:</strong> $direccion</p>";
                echo "<p><strong>Correo:</strong> $email</p>";
                echo "<p><strong>Contraseña:</strong> $contrasena</p>";
                echo "<p><strong>Población:</strong> $poblacion</p>";
                echo "<p><strong>Teléfono:</strong> $telefono</p>";
                echo "<p><strong>Horario:</strong> $horario</p>";

                
            } else {
                echo "<p>Acción no reconocida.</p>";
            }
        } else {
            echo "<p>No se recibieron datos del formulario.</p>";
        }
        ?>
    </div>
</main>


    <!-- Pie de página -->
    <footer>
        <p>IES Lluis Simarro Lacabra - Desenvolupament d'aplicacions multiplataforma</p>
        <p>Curs 24/25</p>
    </footer>
</body>
</html>

