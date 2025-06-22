<?php
//fitxer amb les classes relacionades amb Vehicle
declare( strict_types = 1 );


class Camio extends Vehicle{
    private float $carrega; //nou atribut classe Camio
	//nou mètode classe Camio
    public function carregar(float $quantitat_a_carregar): void
    {
        $this->carrega = $quantitat_a_carregar;
        echo 'S’ha carregat quantitat: '.$quantitat_a_carregar.' <br>';
    }
	//nou mètode classe Camio
    public function verificar_en_marxa() : void
    {
        if ($this->enmarxa == true){
            echo 'Camió en marxa <br>';
        }else{
            echo 'Camió apagat <br>';
        }
    }
}