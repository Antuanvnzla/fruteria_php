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
// Creem la base de dades
// Introduïm la instrucció SQL en la variable $sql per a crear la taula
// podem afegir IF NOT EXISTS per evitar l'error si ja existeix
$sql = "CREATE TABLE usuaris (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	cognoms VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	data TIMESTAMP
	)";
echo "Consulta: $sql <br>";
try { // Executem la instrucció, comprovant si hi ha error
	if (mysqli_query($connexio, $sql))
		echo "Taula usuaris creada amb èxit";
} catch (Exception $e) { //si hi ha hagut algun error
	echo "Error en crear la taula: " . mysqli_error($connexio);
}
//Tanquem la connexié abans d'acabar
mysqli_close($connexio);
?>