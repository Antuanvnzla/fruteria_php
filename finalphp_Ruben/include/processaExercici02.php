<?php
//Ací el codi de l'alumnat
//primer revem el si s'envia qualsevol formulari, encara que lo ideal seria posar un isset per a evitar errors
if ($_POST) {
	$numero=$_POST['numero'];
	$sorpresa=$_POST['sorpresa'];
}

?>
<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Examen PHP Final :: Exercici 02</title>
	<link rel="stylesheet" href="../css/estilsProcessa.css">
</head>

<body>
	<div id="wrapper">
		<header id="cap">
			<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
			<h1>Examen PHP Final :: Exercici 02</h1>
			<img src="../img/logophp.png" alt="logo PHP" class="fotocap">
		</header>
		<main id="contingut">

			<!-- Resultat exercici 02 -->
			<article class="exercici">
				<?php
				include './funcions.php';
				$intents=array();
				
				setcookie('cookie_intents',serialize($intents), time()+30,'/');

				if (array_count_values($intents)>=5) { //Si hi han 5 intents se elimina la cookie
					unset($_COOKIE['cookie_intents']);
				}
				funcioExercici2($numero, $sorpresa);
				

				//Ací el codi de l'alumnat
				
				?>
				<p class="tornar"><a href="../index.php#exercici02">Tornar</a></p>
				<div class="intents">
					<h3>Intents anteriors</h3>
					<?php



					//Ací el codi de l'alumnat per visualitzar el contingut de la cookie
					
					//array_values($_COOKIE['cookie_intents']);
					array_push($intents, $numero); //Incluim el valor indicat quan ja ha mostrat el anterior
				

					?>
				</div>
			</article>

		</main>
		<footer id="peu">
			<?php
			include './partials/peu.php';
			?>
		</footer>
	</div>
</body>

</html>