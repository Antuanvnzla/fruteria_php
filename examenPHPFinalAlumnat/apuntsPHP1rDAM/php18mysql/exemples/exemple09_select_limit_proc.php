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

$sql = "SELECT `id`, `nom`, `cognom`s FROM `usuaris` LIMIT 5 OFFSET 10";
$resultat = mysqli_query($connexio, $sql);


// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error i si n'ha retornat més de 0
if (mysqli_num_rows($resultat) > 0) {
    // dades d'eixida de cada fila
    while($row = mysqli_fetch_assoc($resultat)) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " " . $row["cognoms"]. "<br>";
    }
} else {
		//no s'ha trobat cap resultat
    echo "0 resultats";
}
//Tanquem la connexió abans d'acabar
mysqli_close($connexio);
?>