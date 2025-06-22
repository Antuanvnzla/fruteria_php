<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
try { //creem connexió
    $connexio = new mysqli($servidor, $usuari, $contrasenya, $basedades);
} catch (Exception $e) { //si hi ha hagut algun error
    die("Error en connectar a la base de dades: " . $e);
}
// preparem la instrucció
$stmt = $connexio->prepare("SELECT `id`,`nom`,`cognoms`FROM `usuaris` WHERE `id`= ? OR `id`= ? ");
// enllacem els paràmetres
$primerid = 1;
$segonid = 2;
$stmt->bind_param("ii", $primerid, $segonid); // i=integer, s=string, d=double
$stmt->execute(); //executem
$resultat = $stmt->get_result();
if ($resultat->num_rows > 0) {     // dades d'eixida de cada fila  
    while ($row = $resultat->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Nom: " . $row["nom"] . " " . $row["cognoms"] . "<br>";
    }
} else {
    echo "0 resultats";
}
$stmt->close(); // Tanquem la consulta preparada
$connexio->close(); // Tanquem la connexió
?>