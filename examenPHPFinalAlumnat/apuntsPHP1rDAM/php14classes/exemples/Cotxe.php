<?php
class Cotxe {
	//atributs
    public $color;
    public $nombre_portes;
    public $marca;
    public $gasoli;
	//mètodes
    public function plenarDiposit($gasoli_nou){
        $this->gasoli = $this->gasoli + $gasoli_nou;
    }

    public function accelerar(){
        $this->gasoli = $this->gasoli - 1;
    }

    //constructors
    /*function __construct(){
        $this->color = 'Verd';
        $this->nombre_portes = 3;
        $this->marca = 'Hyundai';
        $this->gasoli = 50;

    }*/

    /*function __construct($color,$nombre_portes,$marca,$gasoli){
        $this->color = $color;
        $this->nombre_portes = $nombre_portes;
        $this->marca = $marca;
        $this->gasoli = $gasoli;

    }*/
    //destructor
    public function __destruct(){
        echo "<br/>Cotxe $this->marca eliminat!<br/>";
    }
}
?>