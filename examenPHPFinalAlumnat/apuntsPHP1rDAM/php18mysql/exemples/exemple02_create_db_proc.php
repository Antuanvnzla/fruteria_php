<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";

try { // Creem la connexió
	$connexio = mysqli_connect($servidor, $usuari, $contrasenya);
	echo "Connectat correctament<br>";
} catch (Exception $e) { // hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}

// Creem la base de dades
// Introduïm la instrucció SQL en la variable
// podem afegir IF NOT EXISTS per evitar l'error si ja existeix
$sql = "CREATE DATABASE IF NOT EXISTS `damprova`";
echo "Consulta: $sql <br>";
try{ // Executem la instrucció, comprovant si hi ha error
	if (mysqli_query($connexio, $sql)) {
		echo "Base de dades creada amb èxit";
	}
} catch (Exception $e) { //si hi ha hagut algun error
	echo "Error en crear la base de dades: " . mysqli_error($connexio);
}


//Tanquem la connexió abans d'acabar
mysqli_close($connexio);
?>