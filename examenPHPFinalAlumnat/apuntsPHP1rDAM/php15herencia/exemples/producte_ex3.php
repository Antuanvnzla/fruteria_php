<?php
//fitxer amb les classes relacionades amb Producte exemple 03
declare( strict_types = 1 );
 class Producte3 {
   protected int $id;
   private string $titol;
   private float $preu;
   private string $nomAutor;
   private string $cognomsAutor;
   function __construct(int $id, string $titol, float $preu, string $nomAutor, string $cognomsAutor) {
     $this->id = $id;
     $this->titol = $titol;
     $this->nomAutor = $nomAutor;
     $this->cognomsAutor = $cognomsAutor;
     $this->preu = $preu;
   }
   public function getAutor() : string
   {
     return $this->nomAutor. " ". $this->cognomsAutor;
   }
   public function getTitol() : string
   {
     return $this->titol;
   }
   public function getPreu() : float
   {
     return $this->preu;
   }
 }

//Classe que hereta de Producte

 class Llibre3 extends Producte3 {
   private int $numPagines;
   function __construct(int $id, string $titol, float $preu, string $nomAutor, string $cognomsAutor, int $numPagines) {
     parent::__construct( $id,   $titol,  $preu,   $nomAutor,  $cognomsAutor);
     $this->numPagines = $numPagines;
   }
   public function getNumPagines() : int
   {
     return $this->numPagines;
   }
   public function getResum() : string
   {
     $resum = "Títol:". $this->getTitol(). ", Preu:". $this->getPreu();
     $resum.= ", Autor:". $this->getAutor(). ", Núm. Pàgines:". $this->getNumPagines();
     return $resum;
   }
 }

?>
