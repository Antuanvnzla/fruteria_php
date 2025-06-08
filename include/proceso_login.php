<?php
session_start();  // IMPORTANTE: Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $archivoUsuarios = __DIR__ . "/usuarios/passwd.txt";

    if (file_exists($archivoUsuarios)) {
        $usuarios = file($archivoUsuarios, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($usuarios as $usuario) {
            list($nombre, $correo, $pass) = explode(":", $usuario);

            // Compara directamente contraseña sin hash
            if ($correo === $email && $password === $pass) {
                $_SESSION['nom'] = $nombre;  // Guardamos el nombre en sesión
                setcookie("usuario", $correo, time() + 3600, "/");
                header("Location: ../index.php");
                exit;
            }
        }
    }

    // Si no se encuentra el usuario o la contraseña no coincide
    header("Location: ../index.php?error=login");
    exit;
}
?>
