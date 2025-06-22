 <?php // Inici de la sessió



	echo "hola";
	
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8"/>
			<title>Pàgina Negatiu</title>
      <link rel="stylesheet" href="estils.css" />
	</head>
	<body>
		<header  id="cap">
			<h1>Negatiu</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<p>
					<?php // les mostrem per pantalla
					session_start();
					// Definim variables de sessió
					$usuari=$_SESSION["usuari"];
						echo "El valor és negatiu <br/>";
						echo "L'usuari és: ".$_SESSION["usuari"]." <br/>";
					?>					
					<a href="pagina_sessions_01.php">Torna a la pàgina 1</a>.<br/>
				</p>
			</div>
		</main>
	</body>
</html> 
