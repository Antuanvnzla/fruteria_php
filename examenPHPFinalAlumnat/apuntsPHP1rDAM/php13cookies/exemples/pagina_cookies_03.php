<?php 
// creem i eliminem alternativament
if(isset($_COOKIE["usuari"])){
	setcookie("usuari", "", 1,"","");
	unset($_COOKIE["usuari"]);
	echo "Cookie eliminada.<br>";
	echo "La cookie 'usuari' ja no existeix.<br> Intent d'accés: ". $_COOKIE["usuari"]."<br>";
	print_r($_COOKIE);
} else{
	setcookie("usuari", "Rafa", time()+(86400*30),"","");
	echo "Cookie creada.<br>";
	echo "La cookie 'usuari' existeix i val: ". $_COOKIE["usuari"]."<br>";
	print_r($_COOKIE);
}

	
?>
<!DOCTYPE html>
<html>
	<head>		
			<meta charset="utf-8">
			<title>Pàgina 3 Cookies</title>
      <link rel="stylesheet" href="estils.css" >
	</head>
	<body>
		<header  id="cap">
			<h1>Exemple Cookies 03</h1>
		</header>
		<main id="contingut">
			<div class="tauler">
				<p>
					<?php 
						if(isset($_COOKIE["usuari"])){
							echo "La cookie 'usuari' encara existeix i val: ". $_COOKIE["usuari"];
						} else {
							echo "La cookie 'usuari' ja no existeix.<br> Intent d'accés: ". $_COOKIE["usuari"]."<br>";
							print_r($_COOKIE);
						}
					?>
				</p>
			</div>
		</main>
	</body>
	<footer id="peu">
         <p>
            1r DAM<br>
            Entorns de Desenvolupament<br>
            Curs 2024/2025<br>
         </p>
      </footer>
</html> 
