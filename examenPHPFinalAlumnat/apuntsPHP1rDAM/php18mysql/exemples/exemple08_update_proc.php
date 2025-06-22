<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
try { // Creem la connexió cap a la base de dades
	$connexio = mysqli_connect($servidor, $usuari, $contrasenya, $basedades);
	echo "Connectat correctament<br>";
} catch (Exception $e) { // hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}
// sql per eliminar un registre
$sql = "UPDATE `usuaris` SET `cognoms`='Faus Pons' WHERE `id`=14";
echo "Consulta: $sql <br>";
// Executem la instrucció
if (mysqli_query($connexio, $sql)) {
    echo "Registre actualitzat correctament";
} else {
    echo "Error actualitzant registre" . mysqli_error($connexio);
}
//Tanquem la connexió abans d'acabar
mysqli_close($connexio);
?>