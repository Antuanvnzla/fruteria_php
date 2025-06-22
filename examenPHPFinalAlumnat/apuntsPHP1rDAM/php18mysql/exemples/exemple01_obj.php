<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";

//comprovant amb excepcions
try {
     $connexio = new mysqli($servidor, $usuari, $contrasenya); //creem connexió
     echo "Connectat correctament";
} catch (Exception $e) { //si hi ha hagut algun error
     die("Error en connectar a la base de dades: ".$e);
}
?>