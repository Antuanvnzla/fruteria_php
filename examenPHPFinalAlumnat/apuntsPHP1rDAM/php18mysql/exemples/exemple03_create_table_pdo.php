<?php

$usuari = "root";
$contrasenya = "";

$basedades = "mysql:host=localhost;dbname=damprova";

try {
    $connexio = new PDO($basedades, $usuari, $contrasenya);
} catch (PDOException $e) {
    die ("Error de connexió:" . $e);
}
// Introduïm la instrucció SQL en la variable $sql per a crear la taula
// Podem eliminar-la prèviament si volem crear-la sempre de nou, amb la instrucció
$sqlelimina = "DROP TABLE IF EXISTS `usuaris`";
// podem afegir IF NOT EXISTS per evitar l'error si ja existeix
$sql = "CREATE TABLE `usuaris`(
`id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
`nom` VARCHAR(30) NOT NULL,
`cognoms` VARCHAR(30) NOT NULL,
`email` VARCHAR(50),
`data` TIMESTAMP
)";
echo "Consulta: $sql <br>";
// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error
try {
    if ($connexio->query($sqlelimina)) {
        echo "Taula usuaris elimina amb èxit<br>";
    }
    if ($connexio->query($sql)) {
        echo "Taula usuaris creada amb èxit";
    }
} catch (Exception $e) {
    echo "Error en crear la taula:" . $connexio->errorInfo()[2];
}
//tanquem la connexió
$connexio = null;
?>