<?php
if ($_POST) { //Aci agafes TOTS els resultats que haviem recivit del formulari anterior
	$servidor=$_POST['servidor'];
	$usuari=$_POST['usuari'];
	$contrasenya=$_POST['contrasenya'];
	$basedades=$_POST['basedades'];
	$taula=$_POST['taula'];
	$nom=$_POST['nom'];
	$ciutat=$_POST['ciutat'];
	$numero=$_POST['numero'];
}
//Quan les obtenim creem el nou objecte, del que abans havem fet la classe
include_once'./DadesConnexio.php';
$objecte=new DadesConnexio($servidor,$usuari,$contrasenya,$basedades, $taula);
//El objecte el serialitzem i el fem una variable serialitzada en una cookie per a tindre'l disponible sempre(per si volem en el exercici2)
setcookie('objecte', serialize($objecte),time()+ 60*60,'/'); //Li posem una hora perque sí i fem que estiga disponible en tot el domini
//Ara que tenim totes les variables creem la nova connexió  a la bbdd
$conn=new mysqli($servidor,$usuari,$contrasenya,$basedades);

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
				
					if ($_POST['opcio']== 'insert') {
						if (($numero % 2 != 0) || $numero < 1 || $numero > 200) {
							echo 'El número no és parell o no està entre 1 i 200<br>';
						} elseif (empty($nom) || empty($ciutat) || empty($numero)) {
							echo "Algun camp està buit<br>";
						} elseif (strlen($nom) < 3 || strlen($ciutat) < 3) {
							echo "Algun camp és menor de 3 caràcters<br>";
						} else {
							// Consulta preparada segura
							$stmtAdd = $conn->prepare("INSERT INTO usuaris (nom, ciutat, numero) VALUES (?, ?, ?)");
							$stmtAdd->bind_param("ssi", $nom, $ciutat, $numero);
							$stmtAdd->execute();
							$stmtAdd->close();
							echo "L'usuari ha sigut afegit correctament";
						}
					}
					if ($_POST["opcio"]== "backup") {
						include_once './funcions.php';
						funcioBackup();
						
					}
					if ($_POST["opcio"]== "delete") {
						funcioEliminar();
						funcioMostrar();
						
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