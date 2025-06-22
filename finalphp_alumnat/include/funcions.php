<?php
//Ací el codi de l'alumnat
//funcions de l'examen
//amb tipus estrictes
//funcions exercici 01
declare(strict_types=1);
include_once 'DadesConnexio.php';
//funció backup
function backup(): bool{
    $conexion = unserialize($_COOKIE['conexion']);
    if (!$conexion instanceof DadesConnexio) {
        error_log("El objeto de la cookie no es una instancia de DadesConnexio.");
        return false;
    }

    $servidor = $conexion->get_servidor();
    $usuari = $conexion->get_usuari();
    $contraceya= $conexion->get_contrasenya();
    $basedades = $conexion->get_basedades();
    $taula = $conexion->get_taula();
    
    $basedades = new mysqli($servidor, $usuari, $contraceya, $basedades);
    if ($basedades->connect_error) {
        error_log("Error de conexión: " . $basedades->connect_error);
        return false;
    }

    $sentencia = $basedades->prepare("SELECT * FROM $taula");
    $sentencia->execute();
    $datosSentencia = $sentencia->get_result();
    $datosBackup = "";
    while ($fila = $datosSentencia->fetch_assoc()) {
        $datosBackup .= $fila['nom'] . ";" . $fila['ciutat'] . ";" . $fila['numero'] . "\n";
    }
    echo "se ha creado el fichero con los datos";
    file_put_contents("backup_" . date("Ymd_His") . ".txt", $datosBackup);     // ruta + nombre + datos
    echo "entro";
    return true;
}

//funció eliminar usuaris


//funció mostrar usuaris
function funcioMostrar(): bool
{
    //Aci rebem el objecte i usem les seues variables
    $objecte = unserialize($_COOKIE['conexion']);
    $servidor = $objecte->get_servidor();
    $usuari = $objecte->get_usuari();
    $contrasenya = $objecte->get_contrasenya();
    $basedades = $objecte->get_basedades();
    $taula = $objecte->get_taula();
    //Ara que tenim totes les variables creem la nova connexió  a la bbdd
    $conn = new mysqli($servidor, $usuari, $contrasenya, $basedades);
    if ($conn->connect_error) {
        echo 'Ha ocorregut un error';
        return false;
    }
    $stmtView = $conn->prepare("SELECT * FROM $taula");
    $stmtView->execute();
    $resultatView = $stmtView->get_result(); //Dóna una taula
    while ($filaView = $resultatView->fetch_assoc()) {
        echo "{$filaView['nom']};{$filaView['ciutat']};{$filaView['numero']}\n";
    }
    return true;
}



//funció exercici 02

//funció: el número està dins del rang?