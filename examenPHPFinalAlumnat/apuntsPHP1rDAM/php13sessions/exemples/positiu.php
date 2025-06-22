 <?php // Inici de la sessió
	session_start();
	// Definim variables de sessió
	$usuari=$_SESSION["usuari"];
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8">
			<title>Pàgina Positiu</title>
      <link rel="stylesheet" href="estils.css" >
	</head>
	<body>
		<header  id="cap">
			<h1>Positiu</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<p>
					<?php // les mostrem per pantalla
					echo "El valor és positiu o zero <br>";
					echo "L'usuari és: ".$_SESSION["usuari"]." <br>";
					?>
					
					<a href="pagina_sessions_01.php">Torna a la pàgina 1</a>.<br>
				</p>
			</div>
		</main>
		<footer id="peu">
		<p>
			1r DAM<br >
			Entorns de Desenvolupament<br >
			Curs 2024/2025<br >
		</p>
		</footer>
	</body>
</html> 
