<?php
//classe que hereta de classe Abstracta
class ClasseConcreta2 extends ClasseAbstracta{
     public function getValor() { //s’ha d’implementar
         return "ClasseConcreta2";
     }

     public function valorPrefix($prefix) { //s’ha d’implementar
         return $prefix."ClasseConcreta2";
     }
}

