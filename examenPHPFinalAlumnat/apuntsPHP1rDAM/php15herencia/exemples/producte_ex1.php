<?php
//fitxer amb les classes relacionades amb Producte exemple 01
declare( strict_types = 1 );
 class Producte1 {
   protected int $id;
   private string $titol;
   private float $preu;
   private string $nomAutor;
   private string $cognomsAutor;
   function __construct (int $id, string $titol, float $preu, string $nomAutor, string $cognomsAutor) {
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
   public function getPreu() :float
   {
     return $this->preu;
   }
 }

//Classe que hereta de Producte1 
 class Llibre1 extends Producte1 {
	//utilitza els getters, perquè els atributs en la classe pare
	//s'han definit com a private.
   public function getResum() {
     $resum = "<strong>Títol:</strong> ". $this->getTitol().", <strong>Preu:</strong> ".$this->getPreu();
     $resum.= ", <strong>Autor:</strong> ". $this->getAutor();
     return $resum;
   }
	//En canvi l'Id, declarat com a protected, es pot accedir directament.
	public function getId() : int
    {
     return $this->id;
   }
 }


?>
