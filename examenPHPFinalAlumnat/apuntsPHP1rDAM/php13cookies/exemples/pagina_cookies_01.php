<?php
// Crear una galeta
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie("Color", "Roig", time() + 20 * 24 * 60 * 60, "", "");
// 20 dies = 20*24*60*60 segons
$cookie_nom = "usuari";
$cookie_valor = "Xavi";
setcookie($cookie_nom, $cookie_valor, time() + (86400 * 30), "", "");
// 86400 = 1 dia
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" >
	<title>Pàgina 1 Cookies</title>
	<link rel="stylesheet" href="estils.css" >
</head>

<body>
	<header id="cap">
		<h1>Exemple Cookies 01</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<p>
				<?php

				if (!isset($_COOKIE[$cookie_nom])) {
					echo "Cookie amb nom '" . $cookie_nom . "' no està creada!";
				} else {
					echo "Cookie '" . $cookie_nom . "' s'ha creat!<br>";
					echo "El seu valor és: " . $_COOKIE[$cookie_nom];
				}
				?>
			</p>
		</div>
		<div class="tauler">
			<h3>Fruita</h3>
			<p>
				<?php
				if (isset($_COOKIE["fruita"])) {
					echo "Cookie fruita: " . $_COOKIE["fruita"] ."<br>";
				} else {
					echo "Cookie 'fruita' no s'ha creat encara.<br>";
				}
				?>
			</p>
		</div>
		<div class="tauler">
			<h2>Formulari Fruita</h2>
			<form id="formulari" method="POST" action="processaFormulari.php">
				<div>
					<span>Fruita:</span>
					<span><input id="fruita" name="fruita" type="text" ></span>
				</div>
				<div>
					<span><input id="submitform" name="submitform" type="submit" value="Envia" ></span>
			</form>
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
