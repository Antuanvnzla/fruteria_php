 <?php
 	session_start();
	//session_regenerate_id();
	// Definim variables de sessió
	$_SESSION["nom"] = "Ernest";
	$_SESSION["cicle"] = "DAW";
	$_SESSION["ciutat"] = "Xàtiva";
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8">
			<title>Pàgina 1 Sessions</title>
      <link rel="stylesheet" href="estils.css" >
	</head>
	<body>
		<header  id="cap">
			<h1>Exemple Sessions 01</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<p>
					<?php 
					echo "Valor de l'id de la sessió: ".session_id()."<br>";
					?>
				</p>
			</div>
			<div class="tauler">
				<p>
						<a href="destrueix_sessio.php">Destruïm la sessió</a>
				</p>
			</div>	
			<div class="tauler">
				<p>
					<?php // les mostrem per pantalla
					echo "S’han establert les variables de sessió: <br>";
					echo "nom: ".$_SESSION["nom"]." <br>";
					echo "cicle: ".$_SESSION["cicle"]." <br>";
					echo "ciutat: ".$_SESSION["ciutat"]." <br>";
					?>
					
					<a href="pagina_sessions_02.php">Enllaç a pàgina 2</a> que utilitza aquestes variables iniciant sessió.<br>
					<a href="pagina_sessions_03.php">Enllaç a pàgina 3</a> que utilitza aquestes variables sense iniciar sessió.<br>
					<a href="pagina_sessions_04.php">Enllaç a pàgina 4</a> que intenta redirigir dins del contingut html.<br>
				</p>
			</div>
			<div class="tauler">
			<h2>Exemple Formulari</h2>
				<form id="formulari" method="POST" action="processaFormulari.php">
		    	<div>
		          <span>usuari:</span>
		          <span><input id="usuari" name="usuari" type="text" ></span>
		    	</div>
					<div>
		          <span>valor:</span>
		          <span><input id="valor" name="valor" type="number" ></span>
		    	</div>
					<div>
							<span><input id="submitform" name="submitform" type="submit" value="Envia"></span>
   			</form>




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
