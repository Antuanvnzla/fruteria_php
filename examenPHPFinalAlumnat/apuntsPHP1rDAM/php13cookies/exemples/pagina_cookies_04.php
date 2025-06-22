<?php
//Esborrem totes les cookies

foreach ($_COOKIE as $nom => $valor) {
	setcookie($nom,"",1);
	unset($_COOKIE[$nom]);
}
//creem una cookie
//setcookie("prova","valor_prova",time()+86400*30);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" >
	<title>Pàgina 4 Cookies</title>
	<link rel="stylesheet" href="estils.css" >
</head>

<body>
	<header id="cap">
		<h1>Exemple Cookies 04</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<p>
				<?php
				if (count($_COOKIE) > 0) {
					echo "Les cookies estan habilitades.<br>";
					echo "Hi ha ".count($_COOKIE)." cookies<br>";
					foreach ($_COOKIE as $nom => $valor) {
						echo "cookie ".$nom." => ".$valor."<br>";
					}
					print_r($_COOKIE);
				} else {
					echo "No hi ha cookies.<br>";
					print_r($_COOKIE);
				}
				?>
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