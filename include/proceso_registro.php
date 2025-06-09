<?php
if ($_POST['password'] !== $_POST['confirm_password']) {
    header('Location: ../index.php?apartat=contrasena');
    exit();
}

$sinValor = "Sin valor";

$nombre = htmlspecialchars($_POST['nombre']);
$apellido = isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : $sinValor;
$direccion = isset($_POST['direccion']) ? htmlspecialchars($_POST['direccion']) : $sinValor;
$email = htmlspecialchars($_POST['email']);
$contrasena = htmlspecialchars($_POST['password']);
$poblacion = isset($_POST['poblacion']) ? $_POST['poblacion'] : $sinValor;
$frutasPreferidas = isset($_POST['frutas']) ? $_POST['frutas'] : [];
$puntuacion = isset($_POST['puntuacion']) ? (int)$_POST['puntuacion'] : null;
$multiplicador = isset($_POST['multiplicador']) ? (int)$_POST['multiplicador'] : 0;
$estilos = isset($_POST['estilos']) ? $_POST['estilos'] : 'estilos.css';

$imagenesFrutas = [
    'fresa' => '../images/fresa.png',
    'manzana' => '../images/manzana.png',
    'melon' => '../images/melon.png',
    'caqui' => '../images/caqui.png',
    'uva' => '../images/uva.png',
];

$rutaArchivo = 'usuarios/psswd.txt';
$lineaUsuario = "$nombre:$email:$contrasena\n";
file_put_contents($rutaArchivo, $lineaUsuario, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruteria Verduleria Online</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>
        <img src="../images/fresa.png" alt="Fresa">
        <h1>Proyecto PHP Entorns</h1>
        <h2>Frutería Verdulería Online</h2>
        <img src="../images/manzana.png" alt="Manzana">
    </header>
    <nav>
        <?php
        include '../include/partials/navegacion2.php';
        ?>
    </nav>
    <main>
        <h2>Datos Enviados</h2>
        <div class="datos">
            <?php
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Apellido:</strong> $apellido</p>";
            echo "<p><strong>Dirección:</strong> $direccion</p>";
            echo "<p><strong>Correo:</strong> $email</p>";
            echo "<p><strong>Contraseña:</strong> $contrasena</p>";

            $imagenPoblacion = '../images/imagenPorDefecto.png';
            $nombrePoblacion = $sinValor;

            switch ($poblacion) {
                case 'xativa':
                    $imagenPoblacion = '../images/xativa.png';
                    $nombrePoblacion = 'Xátiva';
                    break;
                case 'novetle':
                    $imagenPoblacion = '../images/novetle.png';
                    $nombrePoblacion = 'Novetlè';
                    break;
                case 'genoves':
                    $imagenPoblacion = '../images/genoves.png';
                    $nombrePoblacion = 'Genovés';
                    break;
                case 'llosa':
                    $imagenPoblacion = '../images/llosa.png';
                    $nombrePoblacion = 'La Llosa de Ranes';
                    break;
            }

            echo "<p><strong>Población:</strong> $nombrePoblacion</p>";
            echo "<div>
                    <img src='$imagenPoblacion' alt='Imagen de población' style='margin-top: 20px; width: 100%; max-width: 500px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);'>
                  </div>";

            $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : $sinValor;
            echo "<p><strong>Teléfono:</strong> $telefono</p>";

            $horario = isset($_POST['horario']) ? htmlspecialchars($_POST['horario']) : $sinValor;
            $nombreHorario = $sinValor;

            if ($horario == 'manana') {
                $nombreHorario = 'Mañana';
            } elseif ($horario == 'tarde') {
                $nombreHorario = 'Tarde';
            }

            echo "<p><strong>Horario:</strong> $nombreHorario</p>";

            echo "<h2>Frutas Preferidas:</h2>";
            if (!empty($frutasPreferidas)) {
                echo '<div class="frutasSeleccionadas">';
                foreach ($frutasPreferidas as $fruta) {
                    if (array_key_exists($fruta, $imagenesFrutas)) {
                        echo "<div>
                                <img src='{$imagenesFrutas[$fruta]}' alt='{$fruta}'>
                                <p>" . ucfirst($fruta) . "</p>
                              </div>";
                    }
                }
                echo '</div>';
            }

            echo "<h2>Opinión sobre la web</h2>";
            echo "<p><strong>Puntuación seleccionada:</strong> $puntuacion * $multiplicador</p>";
            echo "<div style='display: flex; flex-wrap: wrap; gap: 10px;'>";
            for ($i = 0; $i < $multiplicador; $i++) {
                $imagenOpinion = "../images/bananaroja.png";
                if ($puntuacion >= 3) {
                    $imagenOpinion = "../images/bananaamarilla.png";
                }
                if ($puntuacion == 5) {
                    $imagenOpinion = "../images/bananaverde.png";
                }
                echo "<img src='$imagenOpinion' alt='Imagen de puntuación' style='width: 50px; height: auto;'>";
            }
            echo "</div>";
            ?>
        </div>
    </main>
    <footer>
        <?php include '../include/partials/pie.php'; ?>
    </footer>
</body>
</html>