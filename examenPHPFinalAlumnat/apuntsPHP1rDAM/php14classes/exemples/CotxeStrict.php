<?php
declare(strict_types=1);
class Cotxe {
	//atributs
    public string $color;
    public int $nombre_portes;
    public string $marca;
    public int $gasoli;
	//mètodes
    public function plenarDiposit(int $gasoli_nou):void{
        $this->gasoli = $this->gasoli + $gasoli_nou;
    }

    public function accelerar():void{
        $this->gasoli = $this->gasoli - 1;
    }

    //constructors
    /*function __construct(){
        $this->color = 'Verd';
        $this->nombre_portes = 3;
        $this->marca = 'Hyundai';
        $this->gasoli = 50;

    }*/

    /*function __construct(string $color, int $nombre_portes,string $marca, int $gasoli){
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