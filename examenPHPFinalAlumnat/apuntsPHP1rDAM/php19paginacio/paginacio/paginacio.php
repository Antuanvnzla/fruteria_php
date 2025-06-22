<?php
//obtenim el valor de la pàgina actual
isset($_GET['pagina']) ? $pagina = $_GET['pagina'] : $pagina = 0;
//definim la quantitat d'elements que volem mostrar per pàgina
$elem_per_pagina = 5;

//dades del servidor i base de dades
$servidor = "localhost";
$usuari = "root";
$contrasenya = "";
$basedades = "damprova";
// Creem la connexió
try { // Creem la connexió
	$connexio = mysqli_connect($servidor, $usuari, $contrasenya, $basedades);
} catch (Exception $e) { // hi ha hagut algun error
	die("Error en connectar a la base de dades: " . $e);
}

?>
<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Paginació PHP - MySQL</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Paginació PHP - MySQL</h1>
	</header>
	<main id="contingut">
		<div class="tauler">


			<?php
			//hem de calcular l'offset actual en funció de la pàgina en què ens trobem
			//és igual al valor de la pàgina en la que ens trobem, per la quantitat d'elements per pàgina
			$offset = $pagina * $elem_per_pagina;
			$sql = "SELECT id,nom,cognoms,email,data FROM usuaris LIMIT $elem_per_pagina OFFSET $offset";
			$resultat = mysqli_query($connexio, $sql);
			// Executem la instrucció, comprovant si hi ha hagut algun tipus d'error i si n'ha retornat més de 0
			if (mysqli_num_rows($resultat) > 0) {
				echo "<table class='taularesultats'>";
				echo "<tr><td>Id</td><td>Nom</td><td>Cognoms</td><td>E-mail</td><td>Data</td></tr>";
				// dades d'eixida de cada fila
				while ($row = mysqli_fetch_assoc($resultat)) {
					?>
					<tr>
						<td class="casella"><?php echo $row['id']; ?></td>
						<td class="casella"><?php echo $row['nom']; ?></td>
						<td class="casella"><?php echo $row['cognoms']; ?></td>
						<td class="casella"><?php echo $row['email']; ?></td>
						<td class="casella"><?php echo $row['data']; ?></td>
					</tr>
					<?php
				}
				echo "</table>";
			} else {
				//no s'ha trobat cap resultat
				echo "<table class='taularesultats'>";
				echo "<tr><td class='casella'>0 resultats</td></tr>";
				echo "</table>";
			}

			?>
			</table>

		</div>
		<div id="paginacio">
			<!-- Sabent quin és l'offset i la quantitat d'elements, calculem quantes pàgines fan falta -->
			<?php
			//quan tenim una consunta amb funcions d'agregació, cal definir alias amb 'as'
			$sql = "SELECT COUNT(*) as total FROM usuaris";
			$resultat = mysqli_query($connexio, $sql);
			if (mysqli_num_rows($resultat) > 0) {
				$row = mysqli_fetch_assoc($resultat);
				echo "<p>Quantitat d'elements: " . $row['total'] . "</p>";
				echo "<p>Elements per pàgina: " . $elem_per_pagina . "</p>";
				$n_pagines = ceil($row['total'] / $elem_per_pagina);
				echo "<p>Número de pàgines: " . $n_pagines . "</p>";

				//Indicador anar a la primera pàgina 
				echo "<div>";
				if ($pagina != 0) {
					echo '<span class="elementPaginacio"><a href="paginacio.php?pagina=0">Inici</a></span>  ';
				} else {
					echo '<span class="elementPaginacio">Inici</span>  ';
				}

				//Indicador anar a pàgina anterior
				if ($pagina != 0) {
					echo '<span class="elementPaginacio"><a href="paginacio.php?pagina=' . ($pagina - 1) . '"><<</a></span>  ';
				} else {
					echo '<span class="elementPaginacio"><<</span> ';
				}

				for ($i = 0; $i < $n_pagines; $i++) {
					//si la pàgina és l'actual, no li fiquem enllaç
					if (($pagina) != $i) {
						echo ' <span class="elementPaginacio"><a href="paginacio.php?pagina=' . ($i) . '">' . ($i + 1) . '</a></span> ';
					} else {
						echo '<span class="elementPaginacio">' . ($i + 1) . '</span> ';
					}
				}

				//Indicador anar a pàgina posterior
				//hem de veure si estem en l'última pàgina
				if (($pagina + 1) != $n_pagines) {
					echo '  <span class="elementPaginacio"><a href="paginacio.php?pagina=' . ($pagina + 1) . '" >>></a></span>';
				} else {
					echo '  <span class="elementPaginacio">>></span>';
				}

				//Indicador anar a l'última pàgina
				//hem de veure si estem en l'última pàgina
				if (($pagina + 1) != $n_pagines) {
					echo '  <span class="elementPaginacio"><a href="paginacio.php?pagina=' . ($n_pagines - 1) . '" >Final</a></span>';
				} else {
					echo '  <span class="elementPaginacio">Final</span>';
				}
				echo "</div>";
			} else {
				echo " No hi ha resultats";
			}

			//Tanquem la connexió abans d'acabar
			mysqli_close($connexio);
			?>


		</div>
	</main>
	<footer id="peu">
		<p>
			1r DAW<br>
			Entorns de Desenvolupament<br>
			Curs 2024/2025<br>
		</p>
	</footer>

</body>

</html>