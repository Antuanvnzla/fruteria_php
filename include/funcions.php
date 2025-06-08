<?php
function existeUsuario($email, $rutaArchivo) {
    if (!file_exists($rutaArchivo)) {
        return false;
    }

    $usuarios = file($rutaArchivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($usuarios as $usuario) {
        list(, $correo,) = explode(':', $usuario);
        if ($correo === $email) {
            return true;
        }
    }
    return false;
}

function guardarUsuario($nombre, $email, $password, $rutaArchivo) {
    // Guarda la contraseña con hash seguro
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $linea = "$nombre:$email:$pass_hash\n";

    $resultado = @file_put_contents($rutaArchivo, $linea, FILE_APPEND | LOCK_EX);

    if ($resultado === false) {
        echo "<p style='color:red;'>Error: no se pudo escribir en el archivo.</p>";
        return false;
    }
    return true;
}
?>
