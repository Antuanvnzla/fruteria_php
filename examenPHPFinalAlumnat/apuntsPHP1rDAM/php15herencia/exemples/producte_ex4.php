<?php
//fitxer amb les classes relacionades amb Producte exemple 4
declare( strict_types = 1 );
class Producte4 {
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
   public function getId(): int
   {
     return $this->id;
   }
   public function getAutor(): string
   {
     return $this->nomAutor. " ". $this->cognomsAutor;
   }
   public function getTitol(): string
   {
     return $this->titol;
   }
   public function getPreu(): float
   {
     return $this->preu;
   }
   public function getResum() : string //hem afegit el resum a la classe pare
   {
     $resum = "Títol:". $this->getTitol().", Preu:". $this->getPreu();
     $resum.= ", Autor:". $this->getAutor();
     return $resum;
   }
   public function setId(int $id) {
     $this->id = $id;
   }
   public function setTitol(string $titol) {
     $this->titol = $titol;
   }
   public function setPreu(float $preu) {
     $this->preu = $preu;
   }
   public function setNomAutor (string $nomAutor) {
     $this->nomAutor = $nomAutor;
   }
   public function setCognomsAutor (string $cognomsAutor) {
     $this->cognomsAutor = $cognomsAutor;
   }
 }


 class Llibre4 extends Producte4 {
   private int $numPagines;
   function __construct(int $id,string $titol,float $preu,string $nomAutor,string $cognomsAutor,int $numPagines) {
     parent::__construct($id, $titol, $preu, $nomAutor, $cognomsAutor, $numPagines);
     $this->numPagines = $numPagines;
   }
   public function getNumPagines(): int
   {
     return $this->numPagines;
   }
   public function setNumPagines (int $numPagines) {
     return $this->numPagines = $numPagines;
   }
   public function getResum() : string
   {
     $resum = parent::getResum();  //aprofita el getResum del pare
     $resum.= ", Núm. Pàgines:". $this->getNumPagines(); // hi afegeix informació del nou atribut pagines
     return $resum;
   }
 }

?>
