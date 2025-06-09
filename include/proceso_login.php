<?php
session_start();  // IMPORTANTE: Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $archivoUsuarios = __DIR__ . "/usuarios/passwd.txt";

    if (file_exists($archivoUsuarios)) {
        $usuarios = file($archivoUsuarios, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($usuarios as $usuario) {
            list($nombre, $correo, $pass, $rol) = explode(":", $usuario);

            if ($correo === $email && $password === $pass) {
                $_SESSION['nom'] = $nombre;
                $_SESSION['rol'] = $rol;  // Guardamos el rol en sesión

                setcookie("usuario", $correo, time() + 3600, "/");

                // Redirigir a zona de admin o usuario según rol
                if ($rol === "admin") {
                    header("Location: /partials/admin.partial.php");
                } else {
                    header("Location: ../index.php");
                }
                exit;
            }
        }
    }

    // Usuario o contraseña incorrectos
    header("Location: ../index.php?error=login");
    exit;
}
?>
