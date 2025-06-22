<?php
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
try { //creem connexió
    $connexio = mysqli_connect($servidor, $usuari, $contrasenya, $basedades);
} catch (Exception $e) { //si hi ha hagut algun error
    die("Error en connectar a la base de dades: " . $e);
}
// preparem la instrucció
$stmt = mysqli_prepare($connexio, "SELECT `id`,`nom`,`cognoms`FROM `usuaris` WHERE `id`= ? OR `nom`= ? ");
// enllacem els paràmetres
$id = 1;
$nom = "Maria";
mysqli_stmt_bind_param($stmt, "is", $id, $nom); // i=integer, s=string, d=double
mysqli_stmt_execute($stmt); //executem
$resultat = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($resultat) > 0) {     // dades d'eixida de cada fila  
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "id: " . $row["id"] . " - Nom: " . $row["nom"] . " " . $row["cognoms"] . "<br>";
    }
} else {
    echo "0 resultats";
}
mysqli_stmt_close($stmt); // Tanquem la consulta preparada
mysqli_close($connexio); // Tanquem la connexió
?>