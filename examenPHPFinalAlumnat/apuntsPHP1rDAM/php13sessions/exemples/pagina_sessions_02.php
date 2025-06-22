 <?php // Inici de la sessió
	session_start();
	//no necessitem definir les variables, si existeixen, simplement les obtenim
	$nom_sessio=$_SESSION["nom"];
	$cicle_sessio=$_SESSION["cicle"];
	$ciutat_sessio=$_SESSION["ciutat"];
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8">
			<title>Pàgina 2 Sessions</title>
      <link rel="stylesheet" href="estils.css" >
	</head>
	<body>
		<header  id="cap">
			<h1>Exemple Sessions 02</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<p>
					<?php // les mostrem per pantalla
					echo "Valor de l'id de la sessió: ".session_id()."<br>";
					?>
			</div>
			<div class="tauler">
				<p>
					<?php // les mostrem per pantalla
					echo "Hem obtingut les variables de sessió fixades en la pàgina anterior: <br>";
					echo "nom: ".$nom_sessio." <br>";
					echo "cicle: ".$cicle_sessio." <br>";
					echo "ciutat: ".$ciutat_sessio." <br>";
					?>
					<a href="pagina_sessions_01.php">Retorn a pàgina 1</a>.
				</p>
			</div>
		</main>
		<footer id="peu">
		<p>
			1r DAM<br>
			Entorns de Desenvolupament<br>
			Curs 2024/2025<br>
		</p>
		</footer>
	</body>
</html> 
