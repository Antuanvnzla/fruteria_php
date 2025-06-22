<?php 
ob_start(); // Activa el buffer de salida para evitar salida prematura
var_dump(file_exists('DadesConnexio.php'));


	//ací el codi de l'alumnat
	if (isset($_POST['nom'])) { // verifico los datos y y si no tienen algo se los asigno
		$nombre = $_POST['nom'];
	}else{
		$nombre = 'Sin nombre';
	}

	if (isset($_POST['ciutat'])) {
		$ciudad = $_POST['ciutat'];
	}else{
		$ciudad = 'Sin ciudad';
	}

	if (isset($_POST['numero'])) {
		$numero = $_POST['numero'];
	}else{
		$numero = 'Sin numero';
	}

	if (isset($_POST['opcio'])) {
		$opcion = $_POST['opcio'];
	}else{
		$opcion = 'SinDatos';
	}



	// obtengo despues de crear el obketo los datos del servidor

	$servidor = $_POST['servidor'] ?? '';
	$usuario = $_POST['usuari'] ?? '';
	$contraceya = $_POST['contrasenya'] ?? '';
	$basedades = $_POST['basedades'] ?? '';
	$tabla = $_POST['taula'] ?? '';
	$opcion = $_POST['opcio']; // no es necesario veriicar este

	include_once 'DadesConnexio.php'; // traigo los datos de la tabla de bases de conexion

	$conexion = new DadesConnexio($servidor,$usuario,$contraceya,$basedades,$tabla,$opcion); // objeto creado

	
	setcookie('conexion', serialize($conexion), time()+ 60*60,'/'); // verificar este

	// conexoin a la base de datos
	$baseDatos = new mysqli($servidor,$usuario, $contraceya,$basedades); 
	if ($baseDatos->connect_error) {
		die("error de conexion: " . $baseDatos->connect_error); // verifico el error
	}

	function insertarUsuario($nombre, $ciudad, $numero, $baseDatos){ // no crearla publica
		if (empty($nombre) || empty($ciudad) || $numero === '') { //verificar que no esté vacio
			echo "<p>faltan datos por insertar </p>"; 
			return;
		}else if (strlen($nombre) <= 2 || strlen($ciudad) <= 2 ) { // y verifico que cumpla con los parametros
			echo "<p>El nombre o la ciudad debe ser mayor a 2 letras </p>"; 
		}else if ($numero <= 0 || $numero > 200) {
			echo "<p>numero fuera de rango </p>"; 
		}else if ($numero % 2 != 0) {
			echo "<p>El numero debe ser par</p>"; 
		}
		$stmtAdd = $baseDatos->prepare("INSERT INTO usuaris (nom, ciutat, numero) VALUES (?, ?, ?)"); 


		if (!$stmtAdd) {
			echo "entra yo";	
		}
		$stmtAdd->bind_param("ssi",$nombre, $ciudad, $numero); // s string i int vincula los parametros
		$stmtAdd->execute();
		$stmtAdd->close(); 
		echo "se agrego a la base de dastos yooo";	
		
	
	}
	

	function hacerBackup(){
		//vacio
	}

	function elimiarUsuario(){
		//vacio
	}
	ob_end_flush(); // Envía la salida acumulada
?>
<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Examen PHP Final :: Exercici 01</title>
	<link rel="stylesheet" href="../css/estilsProcessa.css">
</head>

<body>
	<div id="wrapper">
		<header id="cap">
			<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
			<h1>Examen PHP Final :: Exercici 01</h1>
			<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
		</header>
		<main id="contingut">

			<!-- Resultat exercici 01 -->
			<article class="exercici">
				<?php

				
				

				//ací el codi de l'alumnat
				switch ($opcion){
					case 'insert':
						insertarUsuario($nombre,$ciudad,$numero,$baseDatos);
						
					break;

					case 'backup':
						include_once './funcions.php';
						backup();
					break;

					case 'delete':
					if ($_POST["opcio"]== "delete") {
						include_once './funcions.php';
						//funcioEliminar();
						funcioMostrar();
						
					}
					break;

				}
				?>
				<p class="tornar"><a href="../index.php#exercici01">Tornar</a></p>
			</article>
		</main>
		<footer id="peu">
			<?php
			include './partials/peu.php';
			?>
		</footer>
	</div>
</body>

</html>
 
