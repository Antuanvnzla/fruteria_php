<?php
class Producte {
	//constants
	const DISPONIBLE = 100;
  const	FABRICANT = "Manufacturing CO.";
	const PREU	= 50;

	//atributs
    private $nom;
    private $preu;
    public $id;

	//metodes
    public function getNom() {
      return $this->nom;
    }
	public function setNom($nom) {
		$this->nom = $nom;
	}
    public function getPreu() {
      return $this->preu;
    }
    public function setPreu($preu) {
		if ($preu< 50) {
			$this->preu = self::PREU; //accedim a una constant dins de la classe
		} else {
            $this->preu = $preu;
		}
    }
    public function getId () {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }

    //constructor
    /*function __construct($nom,$preu,$id){
        $this->nom=$nom;
        $this->preu=$preu;
        $this->id=$id;
    }*/
    
	/*function __construct ($id,$nom) {
      $this->id = $id;
      $this->nom = $nom;
    }*/
    
    //destructor
    /*function __destruct(){
        echo "<br>Producte $this->nom eliminat!<br>";
    }*/
  }
?>