<?php
//fitxer amb les classes relacionades amb Vehicle
declare( strict_types = 1 );
 
class Autobus extends Vehicle{
    private int $passatgers; //nou atribut classe Autobus
	//nou mètode classe Autobus
    public function pujar_passatgers(int $quantitat_passatgers): void
    {
        $this->passatgers = $quantitat_passatgers;
        echo 'Han pujat '.$quantitat_passatgers.' passatgers <br>';
    }
	//nou mètode classe Camio
    public function verificar_en_marxa(): void
    {
        if ($this->enmarxa == true){
            echo 'Autobús en marxa <br>';
        }else{
            echo 'Autobús apagat <br>';
        }
    }
}


?>
