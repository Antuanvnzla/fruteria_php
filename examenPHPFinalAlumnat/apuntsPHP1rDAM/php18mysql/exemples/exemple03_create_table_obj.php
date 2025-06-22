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
// Introduïm la instrucció SQL en la variable $sql per a crear la taula

// Podem eliminar-la prèviament si volem crear-la sempre de nou, amb la instrucció
$sqlelimina = "DROP TABLE IF EXISTS `usuaris`";
// podem afegir IF NOT EXISTS per evitar l'error si ja existeix
$sql = "CREATE TABLE `usuaris` (
	`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`nom` VARCHAR(30) NOT NULL,
	`cognoms` VARCHAR(30) NOT NULL,
	`email` VARCHAR(50),
	`data` TIMESTAMP
	)";
echo "Consulta: $sql <br>";
try { // Executem la instrucció, comprovant si hi ha error
	if ($connexio->query($sqlelimina) === TRUE)
		echo "Taula usuaris eliminada amb èxit<br>";
	if ($connexio->query($sql) === TRUE)
		echo "Taula usuaris creada amb èxit";
} catch (Exception $e) { //si hi ha hagut algun error
	echo "Error en crear la taula: " . $connexio->error;
}

//Tanquem la connexió abans d'acabar
$connexio->close();
?>