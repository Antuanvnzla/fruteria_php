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

$sql = "SELECT `id`, `nom`, `cognoms` FROM `usuaris`";
echo "Consulta: $sql <br>";
$resultat = $connexio->query($sql);


// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error i si n'ha retornat més de 0
if ($resultat->num_rows> 0) {
    // dades d'eixida de cada fila
    while($row = $resultat->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " " . $row["cognoms"]. "<br>";
    }
} else {
		//no s'ha trobat cap resultat
    echo "0 resultats";
}
//Tanquem la connexió abans d'acabar
 $connexio->close();
?>