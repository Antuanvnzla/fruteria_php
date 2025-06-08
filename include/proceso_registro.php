<?php
// proceso_registro.php

function guardarUsuario($nombre, $email, $password, $rutaArchivo) {
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $linea = "$nombre:$email:$pass_hash\n";

    $resultado = @file_put_contents($rutaArchivo, $linea, FILE_APPEND | LOCK_EX);

    if ($resultado === false) {
        echo "<p style='color:red;'>Error: no se pudo escribir en el archivo $rutaArchivo</p>";
        return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($nombre) || empty($email) || empty($password)) {
        echo "<p style='color:red;'>Los campos nombre, email y contraseña son obligatorios.</p>";
        exit;
    }

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Correo electrónico no válido.</p>";
        exit;
    }

    $rutaArchivo = __DIR__ . '/usuarios/passwd.txt';

    // Comprobar si ya existe el usuario
    $usuarios = file($rutaArchivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($usuarios as $usuario) {
        list($_nombre, $_email, $_hash) = explode(':', $usuario);
        if ($email === $_email) {
            echo "<p style='color:red;'>Este correo ya está registrado.</p>";
            exit;
        }
    }

    $guardadoOk = guardarUsuario($nombre, $email, $password, $rutaArchivo);

    if ($guardadoOk) {
        echo "<p style='color:green;'>Usuario registrado correctamente.</p>";
    }
}
?>
