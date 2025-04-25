<?php
session_start();

$apartat = $_GET['apartat'] ?? 'inicio';
$estilos = $_POST['estilos'] ?? 'index.css';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería Verdulería Online</title>
    <link rel="stylesheet" href="../css/<?php echo htmlspecialchars($estilos); ?>">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <img src="../images/cereza.jpg" alt="Cherry" class="left-icon">
        <h1>Projecte PHP Entorns</h1>
        <h2>Fruiteria Verduleria Online</h2>
        <img src="../images/manzana.png" alt="Apple" class="right-icon">
    </header>

    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="../index.php?apartat=inicio">Inicio</a></li>
            <li><a href="../index.php?apartat=registro">Registro</a></li>
            <li><a href="../index.php?apartat=contacto">Contacto</a></li>
            <li><a href="../index.php?apartat=botiga">Botiga</a></li>
        </ul>
    </nav>

    <!-- Contenido -->
    <main>
        <h2>Datos Enviados</h2>
        <div style="background-color: #fffbcc; border: 2px solid #cccc99; padding: 15px; border-radius: 10px;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $action = $_POST['action'] ?? "sin accion";
                if ($action == "enviar") {
                    $sinValor = "Sin valor";

                    // Capturar y validar campos
                    $nom = htmlspecialchars($_POST['nombre'] ?? $sinValor);
                    $apellido = htmlspecialchars($_POST['apellido'] ?? $sinValor);
                    $direccion = htmlspecialchars($_POST['direccion'] ?? $sinValor);
                    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? htmlspecialchars($_POST['email']) : "Correo inválido";

                    // Validación de contraseña
                    $contrasena = $_POST['password'] ?? '';
                    $pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/";
                    if (!preg_match($pattern, $contrasena)) {
                        echo "<p>La contraseña debe tener al menos 6 caracteres, incluir una letra mayúscula, un número y un carácter especial.</p>";
                        exit;
                    }
                    $contrasena = password_hash($contrasena, PASSWORD_BCRYPT);

                    $poblacion = htmlspecialchars($_POST['poblacion'] ?? $sinValor);
                    $telefono = htmlspecialchars($_POST['telefono'] ?? $sinValor);
                    $horario = htmlspecialchars($_POST['horario'] ?? $sinValor);

                    // Guardar datos en sesión
                    $_SESSION['usuario'] = [
                        'nombre' => $nom,
                        'apellido' => $apellido,
                        'direccion' => $direccion,
                        'email' => $email,
                        'poblacion' => $poblacion,
                        'telefono' => $telefono,
                        'horario' => $horario
                    ];

                    // Mostrar datos
                    echo "<p><strong>Nombre:</strong> $nom</p>";
                    echo "<p><strong>Apellido:</strong> $apellido</p>";
                    echo "<p><strong>Dirección:</strong> $direccion</p>";
                    echo "<p><strong>Correo:</strong> $email</p>";
                    echo "<p><strong>Población:</strong> $poblacion</p>";

                    // Mostrar imagen + descripción del pueblo
                    $imagenesPueblos = [
                        "xativa" => "xativa.png",
                        "llosa" => "llosa.png",
                        "novetle" => "novetle.png",
                        "genoves" => "genoves.png"
                    ];

                    $descripcionesPueblos = [
                        "xativa" => "Xàtiva es conocida por su castillo histórico y su rica historia.",
                        "llosa" => "La Llosa de Ranes es un pequeño pueblo encantador rodeado de naturaleza.",
                        "novetle" => "Novetlè destaca por su ambiente tranquilo y su comunidad acogedora.",
                        "genoves" => "Genovés es famoso por su artesanía y festividades tradicionales."
                    ];

                    if (isset($imagenesPueblos[$poblacion])) {
                        $imagenPueblo = $imagenesPueblos[$poblacion];
                        $descripcionPueblo = $descripcionesPueblos[$poblacion] ?? '';

                        echo "<img src='../images/$imagenPueblo' alt='Imagen de $poblacion' style='max-width: 300px; border-radius: 10px; margin-top: 10px;'><br>";
                        echo "<p style='margin-top: 10px;'><em>$descripcionPueblo</em></p>";
                    }

                    echo "<p><strong>Teléfono:</strong> $telefono</p>";
                    echo "<p><strong>Horario:</strong> $horario</p>";

                    // Frutas seleccionadas
                    $frutas = $_POST['frutas'] ?? [];

                    if (!empty($frutas)) {
                        echo "<p><strong>Frutas seleccionadas:</strong></p>";
                        
                        foreach ($frutas as $fruta) {
                            $imagenFruta = "../images/" . htmlspecialchars($fruta) . ".png";
                            echo "<div style='text-align: center;'>
                                    <img src='$imagenFruta' alt='$fruta' style='width: 100px; height: auto; border-radius: 8px;'>
                                    <p style='margin: 5px 0;'>$fruta</p>
                            </div>";
                        }
                    } else {
                        echo "<p><strong>No se seleccionaron frutas.</strong></p>";
                    }

                    // Puntuación
                    $puntuacion = (int) ($_POST['puntuacion'] ?? 0);
                    $multiplicador = (int) ($_POST['multiplicador'] ?? 1);

                    echo "<p><strong>Puntuación seleccionada:</strong> $puntuacion * $multiplicador</p>";
                    echo "<div style='display: flex; flex-wrap: wrap; gap: 10px;'>";

                    for ($i = 0; $i < $multiplicador; $i++) {
                        $imagenOpinion = "../images/bananaroja.png"; // Por defecto

                        if ($puntuacion >= 3) {
                            $imagenOpinion = "../images/bananaamarilla.png";
                        }

                        if ($puntuacion == 5) {
                            $imagenOpinion = "../images/bananaverde.png";
                        }

                        echo "<img src='$imagenOpinion' alt='Imagen de puntuación' style='width: 50px; height: auto;'>";
                    }
                    echo "</div>";

                    include './dades.php';

                    // Aquí se procesa el formulario
                    $nom = $_POST['nom'];
                    $poblacioSeleccionada = $_POST['poblacio']; // valor del select

                    // Aquí mostramos la info de la población
                    if (isset($dadesPoblacions[$poblacioSeleccionada])) {
                        $info = $dadesPoblacions[$poblacioSeleccionada];
                        echo "<h3>Información de $poblacioSeleccionada</h3>";
                        echo "<table border='1' cellpadding='5'>";
                        foreach ($info as $clau => $valor) {
                            echo "<tr><td><strong>$clau</strong></td><td>$valor</td></tr>";
                        }
                        echo "</table>";
                    }

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
