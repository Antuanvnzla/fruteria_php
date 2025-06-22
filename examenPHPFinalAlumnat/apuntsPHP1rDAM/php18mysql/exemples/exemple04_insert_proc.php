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
//  Introduïm la instrucció SQL en la variable $sql
$sql = "INSERT INTO `usuaris` (nom, cognoms, email,data)
VALUES ('Nom', 'Cognoms', 'correu@simarro.com', now())";
echo "Consulta: $sql <br>";
// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
if (mysqli_query($connexio, $sql)) {
			$ultim_id = mysqli_insert_id($connexio); 
		 echo "Nou registre creat amb èxit. últim id: ".$ultim_id;
} else {
		 echo "Error: ". $sql . "<br>" . mysqli_error ($connexio);
}
//Tanquem la connexió abans d'acabar
mysqli_close($connexio);
?>