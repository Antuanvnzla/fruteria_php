<?php
//classe que hereta de classe Abstracta
class ClasseConcreta1 extends ClasseAbstracta{
     protected function getValor() { //s’ha d’implementar
         return "ClasseConcreta1";
     }

     public function valorPrefix($prefix) { //s’ha d’implementar
         return $prefix."ClasseConcreta1";
     }
}