<?php
	//Ací el codi de l'alumnat
	//Classe DadesConnexio.php
	
	class Usuario { //objeto 
		private $nombre;
		private $ciudad;
		private $funcion;

		public function __construct($nombre, $ciudad, $funcion) {
			$this->nombre = $nombre;
			$this->ciudad = $ciudad;
			$this->funcion = $funcion;
		}
	
		public function getNombre() { return $this->nombre; }
		public function getApellidos() { return $this->ciudad; }
		public function getTelefono() { return $this->funcion; }
	}

	// getUsuario(){
	// 	$usuario = new Usuario();
	// }

?>