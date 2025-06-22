<?php


//Ací el codi de l'alumnat

//funcions de l'examen
//amb tipus estrictes
declare(strict_types=1);
//funcions exercici 01
//funció backup
function funcioBackup(): bool
{
    //Ací obtenim els valors del objecte
    $objecte = unserialize($_COOKIE['objecte']);
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

    $stmtBackup = $conn->prepare("SELECT * FROM $taula");
    $stmtBackup->execute();
    $resultatBackup = $stmtBackup->get_result(); //Dóna una taula
    $insertarBackup="";
    while ($filaBackup = $resultatBackup->fetch_assoc()) {
        $insertarBackup .= $filaBackup['nom'] . ";" . $filaBackup['ciutat'] . ";" . $filaBackup['numero'] . "\n";
    }
    file_put_contents("backup_" . date("Ymd_His") . ".txt", $insertarBackup);
    echo "S'ha realitzat el backup";
    return true;
}
//funció eliminar usuaris
function funcioEliminar(): bool
{
    //Ací obtenim els valors del objecte
    $objecte = unserialize($_COOKIE['objecte']);
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

    $stmtDelete = $conn->prepare("DELETE FROM $taula");
    $stmtDelete->execute();
    return true;
}

//funció mostrar usuaris
function funcioMostrar(): bool
{
    //Aci rebem el objecte i usem les seues variables
    $objecte = unserialize($_COOKIE['objecte']);
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
function funcioExercici2(int $numero, int $sorpresa): bool
{
    if ($numero < 3 || $numero > 10) {
        echo 'El numero té que estar en el rang entre tres i 10</br>';
        echo "<img class='imatge' src='./../img/error.png'>";
        return false;
    } else {
        //Aquest exercici em feia un bucle i el vàres corregir

        for ($i = 0; $i < $numero; $i++) {

            for ($j = 0; $j < $numero; $j++) {
                if($i==0 || $i==$numero -1){
                    if ($j == 0 || $j == $numero - 1) {
                        echo "<img src='../img/gat.png' class='imatgequadrat' alt='gat'>";
                    } else {
                        echo "<img src='../img/ratoli.png' class='imatgequadrat' alt='ratolí'>";
                    }
                } else{
                    echo "<img src='../img/ratoli.png' class='imatgequadrat' alt='ratolí'>";
                }              
            }
            echo "<br>";
        }
    }
    if ($numero == $sorpresa) {
        setcookie('sorpresa', $sorpresa, time() + 10, '/');
        header('Location: http://localhost/htdocs_examen/finalphp_alumnat/include/sorpresa.php');
    }
    return true;
}