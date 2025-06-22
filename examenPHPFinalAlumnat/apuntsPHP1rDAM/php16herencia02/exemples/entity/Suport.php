<?php
//classe pare Suport
class Suport {
    public $titol;
    protected $numero;
    private $preu;

    function __construct ($tit, $num, $preu) { //constructor
       $this->titol = $tit;
       $this->numero = $num;
       $this->preu = $preu;
    }
	//getters
    public function getPreuSenseIva() {
       return $this->preu;
    }

    public function getPreuAmbIva() {
       return $this->preu * 1.21;
    }

    public function getNumeroIdentificacio() {
       return $this->numero;
    }
	//funció per mostrar els valors per pantalla
    public function imprimirCaracteristiques() {
        echo "<br>".$this->titol;
        echo "<br>".$this->preu." Euros (IVA no inclòs)";
    }
}
