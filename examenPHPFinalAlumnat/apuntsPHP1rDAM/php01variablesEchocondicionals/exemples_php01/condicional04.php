<!DOCTYPE html>
<html>
	<head>
		<title> Exemple operador ternari</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="estils.css">
	</head>
	<body>
		<header id = "cap">
			<h2> Exemple operador ternari</h2>
		</header>
		<main id="principal">
			<p>
			<?php
				$A = 5; $B = 3; $C = -7; $D = 5;
				$msg="";
				//operador ternari
				$A==5?$msg="A ($A) és 5 <br/>":$msg="A ($A) no és 5 <br/>";
				echo $msg;
				?>
				</p>
				<p>
				<?php
				//operador ternari
				$A<$B?$msg="A ($A) és menor que B ($B) <br/>":$msg="A ($A) és major o igual que B ($B)<br/>";
				echo $msg;
				?>
				</p>
				<p>
				<?php
				//operador ternari
				$B<$C?$msg="B ($B) és menor que C ($C) <br/>":$msg="B ($B) és més gran o igual que C ($C)<br/>";
				echo $msg;
			?>
			</p>
		</main>
		<footer id="peu">
		<p>
			IES Lluís Simarro<br>
			Entorns de desenvolupament<br>
			1r DAM<br>
		</p>
	</footer>
	</body>
</html>