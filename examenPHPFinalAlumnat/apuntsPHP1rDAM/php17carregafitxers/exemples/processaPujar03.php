<!DOCTYPE html>
<html lang="ca">

<head>
	<meta charset="utf-8">
	<title>Pujar Fitxer</title>
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<header id="cap">
		<h1>Exemple Pujar fitxer 03</h1>
	</header>
	<main id="contingut">
		<div class="tauler">
			<p>
				<?php
				//obtenim fitxer que ha carregat l'usuari
				//es guarda a la carpeta fitxers_pujats, dins de la carpeta on es troba el fitxer processaPujar03.php
				//aquesta carpeta ha d'existir prèviament i tindre permissos
				if (!file_exists("fitxers_pujats")) { //utilitzem funcions php per comprovar si existeix
					mkdir("fitxers_pujats");
					chmod("fitxers_pujats", 0755);
				}
				if (isset($_FILES['fitxer']) && !empty($_FILES['fitxer']['name'])) {
					//mida màxima 1MB
					$mida_fitxer = $_FILES['fitxer']['size'];
					if ($mida_fitxer > 1048576) {
						echo 'La mida del fitxer: ' . $mida_fitxer . ' bytes, és superior a 1 MB<br>';
						echo "El fitxer " . $_FILES["fitxer"]["name"] . " no s'ha pujat.<br>";
					} else {
						if (move_uploaded_file($_FILES['fitxer']['tmp_name'], "fitxers_pujats/".$_FILES['fitxer']['name'])) {
							echo "El fitxer <strong>" . $_FILES["fitxer"]["name"] . "</strong> s'ha pujat correctament.<br>";
							//canviem els permisos del fitxer
							chmod("fitxers_pujats/".$_FILES['fitxer']['name'], 0644);

							//podem mostrar el contingut de la carpeta:
							$fitxers = scandir("fitxers_pujats");							
							echo "Contingut del directori <strong>fitxers_pujats</strong>:<br>";
							echo '<span class="llistatDirectori">';
							for($i=0;$i<count($fitxers);$i++){
								if(is_dir($fitxers[$i])){
									//és un directori
									echo "DIR: <strong>".$fitxers[$i]."</strong><br>";
								}else{
									//és un fitxer
									echo "FITXER: <strong>".$fitxers[$i]."</strong> ".filesize("fitxers_pujats/".$fitxers[$i])." bytes<br>";
								}
							}
							echo '</span>';

						} else {
							echo "Hi ha hagut algun error movent el fitxer.";
						}
					}
				} else {
					echo "Hi ha hagut algun error pujant el fitxer.";
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