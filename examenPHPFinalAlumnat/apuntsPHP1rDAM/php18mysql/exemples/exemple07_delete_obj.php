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
$sql = "DELETE FROM `usuaris` WHERE `id`=10";
echo "Consulta: $sql <br>";
// Executem la instrucció
if ($connexio->query($sql) === TRUE) {
    echo "Registre eliminat correctament";
} else {
    echo "Error eliminant registre" .  $connexio->error;
}
//Tanquem la connexió abans d'acabar
$connexio->close();
?>