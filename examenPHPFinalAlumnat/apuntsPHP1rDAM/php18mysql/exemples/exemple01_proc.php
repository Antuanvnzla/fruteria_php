<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";

try { // Creem la connexió
     $connexio = mysqli_connect($servidor, $usuari, $contrasenya); 
     echo "Connectat correctament";
} catch (Exception $e) { // hi ha hagut algun error
     die ("Error en connectar a la base de dades: ".$e);
}
?>