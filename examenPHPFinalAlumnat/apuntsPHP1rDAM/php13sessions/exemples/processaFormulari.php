<?php
	//iniciem la sessió
	session_start();
	//obtenció dels valors d'usuari i valor
	trim(htmlspecialchars($_POST['usuari']))==""?$usuari="Sense valor":$usuari = trim(htmlspecialchars($_POST['usuari']));
	trim(htmlspecialchars($_POST['valor']))==""?$valor="Sense valor":$valor = trim(htmlspecialchars($_POST['valor']));
	//introduïm usuari en una variable de sessió per usar-lo més endavant
	$_SESSION['usuari']=$usuari;
	//comprovem si és positiu-zero o negatiu
	if ($valor>=0){
	  //si es positiu o zero redirigim a la pagina positiu.php
		header("Location: ./positiu.php");
		die();
	} else {
		//si es negatiu redirigim a la pagina negatiu.php
		header("Location: ./negatiu.php");
		die();
	}	

