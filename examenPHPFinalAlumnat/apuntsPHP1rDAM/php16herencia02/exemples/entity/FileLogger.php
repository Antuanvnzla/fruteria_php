<?php
// Definim la classe que implementa la interfície
class FileLogger implements Logger {
   private $gestor; // atributs propis de la classe
   private $fitxerLog;
   function __construct($nomFitxer, $modeObertura = 'a') { //constructor
     $this->ficheroLog = $nomFitxer;
     $this->gestor = fopen($nomFitxer, $modeObertura) or die ('No es pot obrir el fitxer');
   }
   public function log($missatge) { //funció de la interfície
     $missatge = date ( "F j, I, g: i : s a"). ':'. $missatge.PHP_EOL;
     fwrite ($this->gestor, $missatge);
   }
   function __destruct() { //destructor
     if ($this->gestor) { //quan acabem, tanquem el fitxer
       fclose($this->gestor);
     }
   }
 }


?>
