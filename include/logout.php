<?php
session_start();
session_unset();
session_destroy();

// También borrar la cookie si usas alguna, por ejemplo:
setcookie("usuario", "", time() - 3600, "/");

header("Location: ../index.php");
exit;
