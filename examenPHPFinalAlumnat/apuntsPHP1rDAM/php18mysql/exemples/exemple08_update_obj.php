<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
try { //creem connexió a la base de dades
	$connexio = new mysqli($servidor, $usuari, $contrasenya, $basedades); 
	echo "Connectat correctament<br>";
} catch (Exception $e) { //hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}
// sql per eliminar un registre
$sql = "UPDATE `usuaris` SET `cognoms`='Carpio Molina' WHERE `id`=12";
echo "Consulta: $sql <br>";
// Executem la instrucció
if ($connexio->query($sql) === TRUE) {
    echo "Registre actualitzat correctament";
} else {
    echo "Error actualitzant registre" . $connexio->connect_error;
}
//Tanquem la connexió abans d'acabar
$connexio->close();
?>