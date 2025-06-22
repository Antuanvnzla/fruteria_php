<?php
//obtenció dels valors de fruita
$fruita = trim(htmlspecialchars($_POST["fruita"]));
if (!strcmp($fruita,"")==0){
	setcookie("fruita", $fruita , time() + 86400 * 30, "");
}

// redirigim a la pagina del formulari
header("Location: ./pagina_cookies_01.php");
die();


