<?php
//fitxer amb les classes relacionades amb classe abstracta

//classe pare ClasseAbstracta

abstract class ClasseAbstracta {
     // Forçar l'extensió de classe per definir aquest mètode
     abstract protected function getValor();
     abstract protected function valorPrefix($prefix);

     // Mètode comú
     public function imprimir() {
         print $this->getValor()."<br>";
     }
}
