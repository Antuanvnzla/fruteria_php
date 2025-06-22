 <?php // Inici de la sessió
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8">
			<title>Pàgina 4 Sessions</title>
      <link rel="stylesheet" href="estils.css" >
	</head>
	<body>
		<header  id="cap">
			<h1>Exemple Sessions 04</h1>
			<h3>Redirecció</h3>
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
					echo "Intentem redirigir a la pàgina d'Ubuntu: <br>";
					header('Location: https://ubuntu.com/');				
					//header('Content-Type: application/pdf');
					//http_response_code(500);
					exit;
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
