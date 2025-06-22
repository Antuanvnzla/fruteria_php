<?php
//obtenim les variables del formulari
$nom = $_POST['nom'];

//dades del servidor i base de dades
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
try { // Creem la connexió cap a la base de dades
	$connexio = mysqli_connect($servidor, $usuari, $contrasenya, $basedades);
	echo "Connectat correctament<br>";
} catch (Exception $e) { // hi ha hagut algun error
	die ("Error en connectar a la base de dades: " . $e);
}

?>
<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8" >
	<title>Formulari PHP - MySQL</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Formulari PHP - MySQL</h1>
	</header>
	<section id="contingut">
		<div class="tauler">


			<?php
			$sql = "SELECT `id`,`nom`,`cognoms`,`email`,`data` FROM `usuaris` WHERE nom LIKE '$nom'";
			$resultat = mysqli_query($connexio, $sql);
			// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error i si n'ha retornat més de 0
			if (mysqli_num_rows($resultat) > 0) {
				echo "<table class=\"taularesultats\">";
				echo "<tr><td>Id</td><td>Nom</td><td>Cognoms</td><td>E-mail</td><td>Data</td></tr>";
				// dades d'eixida de cada fila
				while ($row = mysqli_fetch_assoc($resultat)) {
					?>
					<tr>
						<td class="casella">
							<?php echo $row['id']; ?>
						</td>
						<td class="casella">
							<?php echo $row['nom']; ?>
						</td>
						<td class="casella">
							<?php echo $row['cognoms']; ?>
						</td>
						<td class="casella">
							<?php echo $row['email']; ?>
						</td>
						<td class="casella">
							<?php echo $row['data']; ?>
						</td>
					</tr>
					<?php
				}
				echo "</table>";
			} else {
				//no s'ha trobat cap resultat
				echo "<table class=\"taularesultats\">";
				echo "<tr><td class='casella'>0 resultats per al nom: $nom</td></tr>";
				echo "</table>";
			}
			//Tanquem la connexió abans d'acabar
			mysqli_close($connexio);
			?>
			</table>
		</div>
	</section>
</body>

</html>