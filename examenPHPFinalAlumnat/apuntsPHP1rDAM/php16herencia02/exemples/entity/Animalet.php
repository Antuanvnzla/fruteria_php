<?php
//classe abstracta que estén una altra classe abstracta
abstract class Animalet extends Animal {
   abstract function correr();
   public function dormir() {
     return "Està dormint";
   }
}