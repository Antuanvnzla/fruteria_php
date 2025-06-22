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

$sql = "INSERT INTO `usuaris` (nom, cognoms, email, data)
VALUES ('Manuel', 'González Ferri', 'manuel@gmail.com',now());";
$sql .= "INSERT INTO `usuaris` (nom, cognoms, email, data)
VALUES ('Maria', 'Sanchis Coll', 'maria@gmail.com',now());";
$sql .= "INSERT INTO `usuaris` (nom, cognoms, email, data)
VALUES ('Gemma', 'Jiménez Serna', 'gemma@gmail.com',now())";
echo "Consulta: $sql <br>";
// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
if ($connexio->multi_query($sql) === TRUE) {
			$ultim_id = $connexio->insert_id;
		 echo "Nous registres creats amb èxit. últim id: ".$ultim_id;
} else {
		 echo "Error: ". $sql . "<br>" . $connexio->error;
}
//Tanquem la connexió abans d'acabar
$connexio->close();
?>