<?php
//obtenim les variables del formulari
$nom=$_POST['nom'];
$cognoms=$_POST['cognoms'];
$email=$_POST['email'];

//dades del servidor i base de dades
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

//joc de caràcters
mysqli_set_charset($connexio,'utf8');
//caràcters especials
$nom = mysqli_real_escape_string($connexio,$nom);
$cognoms = mysqli_real_escape_string($connexio,$cognoms);
$email = mysqli_real_escape_string($connexio,$email);
//consulta
$sql = "INSERT INTO `usuaris` (`nom`,`cognoms`,`email`,`data`) VALUES ('".$nom."','".$cognoms."','".$email."',now())";
//$sql = "INSERT INTO `usuaris` (`nom`,`cognoms`,`email`,`data`) VALUES ('$nom','$cognoms','$email',now())";

// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
if (mysqli_query($connexio, $sql)) {
    echo "Nou registre creat amb èxit";
} else {
		echo "Error: ". mysqli_error ($connexio);
}
//Tanquem la connexió abans d'acabar
mysqli_close($connexio);
?>