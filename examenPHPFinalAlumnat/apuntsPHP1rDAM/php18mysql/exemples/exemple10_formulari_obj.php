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
	$connexio =new mysqli($servidor, $usuari, $contrasenya, $basedades);
	echo "Connectat correctament<br>";
} catch (Exception $e) { // hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}

//joc de caràcters
$connexio->set_charset('utf8');
//caràcters especials
$nom = $connexio->real_escape_string($nom);
$cognoms = $connexio->real_escape_string($cognoms);
$email = $connexio->real_escape_string($email);
//consulta
$sql = "INSERT INTO `usuaris` (`nom`,`cognoms`,`email`,`data`) VALUES ('".$nom."','".$cognoms."','".$email."',now())";
//$sql = "INSERT INTO `usuaris` (`nom`,`cognoms`,`email`,`data`) VALUES ('$nom','$cognoms','$email',now())";

// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
if ($connexio->query( $sql)===TRUE) {
    echo "Nou registre creat amb èxit";
} else {
		echo "Error: ". $connexio->error."<br>";
}
//Tanquem la connexió abans d'acabar
$connexio->close();
?>