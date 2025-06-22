<?php
//fitxer amb les classes relacionades amb Vehicle
declare( strict_types = 1 );
 class Vehicle{
	//Atributs de la classe Vehicle, que s’heretaran
    public string $matricula;
    private string $color;
    protected bool $enmarxa;
	//Mètodes de la classe Vehicle
    public function ficar_en_marxa(): void
    {
        $this->enmarxa = true;
        echo 'Vehicle en marxa <br>';
    }

    public function apagar(): void
    {
        $this->enmarxa = false;
        echo 'Vehicle apagat <br>';
    }
}