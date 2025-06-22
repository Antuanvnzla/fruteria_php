<?php
	//Ací el codi de l'alumnat
	//Classe DadesConnexio.php
	class DadesConnexio{
		private $servidor;
		private $usuari;
		private $contrasenya;
		private $basedades;
		private $taula;

		public function __construct($servidor, $usuari, $contrasenya, $basedades, $taula){
			$this->servidor = $servidor;
			$this->usuari = $usuari;
			$this->contrasenya = $contrasenya;
			$this->basedades = $basedades;
			$this->taula = $taula;
		}

		public function get_servidor(){
			return $this->servidor;
		}

		public function get_usuari(){
			return $this->usuari;
		}

		public function get_contrasenya(){
			return $this->contrasenya;
		}

		public function get_basedades(){
			return $this->basedades;
		}

		public function get_taula(){
			return $this->taula;
		}
	}
?>