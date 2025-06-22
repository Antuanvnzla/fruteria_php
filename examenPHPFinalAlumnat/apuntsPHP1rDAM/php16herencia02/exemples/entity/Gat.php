<?php
//classe no abstracta que hereta d'Animalet
class Gat extends Animalet {
   public function so () { //ha d’implementar-la
     return "Miauuuuuuuu !!!";
   }
   public function correr () { //ha d’implementar-la
     return "Està corrent";
   }

 	 /*public function correr($content = FALSE) { //amb argument opcional
    if (!$content){
			return "Aquesta corrent cabrejat";
		}
    return "Està corrent";
   }*/
  //la funció dormir, que no és abstracta,no té perquè implementar-la
}


