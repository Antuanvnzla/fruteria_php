<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";

try {
	$connexio = new mysqli($servidor, $usuari, $contrasenya); //creem connexió
	echo "Connectat correctament <br>";
} catch (Exception $e) { //si hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}

// Creem la base de dades
// Introduïm la instrucció SQL en la variable 
// podem afegir IF NOT EXISTS per evitar l'error si ja existeix
$sql = "CREATE DATABASE `damprova`";
echo "Consulta: $sql <br>";
// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
try{
	if ($connexio->query($sql) === TRUE){
		echo "Base de dades creada amb èxit";
	}
} catch (Exception $e) { //si hi ha hagut algun error
	echo "Error en crear la base de dades: " . $connexio->error;
}


//Tanquem la connexió abans d'acabar
$connexio->close();
?>