<?php
//classe que hereta de Suport

class BluRay extends Suport {
   private $durada; //afegim un nou atribut als que ja té la classe pare
	//definim el constructor de la nova classe que hereta de suport
   function __construct($tit, $num, $preu, $durada) {
	 //aprofitem el constructor de la classe pare
      parent::__construct ($tit, $num, $preu); 
      $this->durada = $durada;
   }

   public function imprimirCaracteristiques() {
      echo "Pel·lícula en BluRay:";
			//aprofitem el codi declarat en la classe pare
			//amb l’operador d’àmbit parent::
      parent::imprimirCaracteristiques();
      echo "<br> Durada: ". $this->durada; //mostrem el nou atribut també
   }
}

