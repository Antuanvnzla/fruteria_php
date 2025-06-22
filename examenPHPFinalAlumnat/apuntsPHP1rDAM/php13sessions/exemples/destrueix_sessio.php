<?php
	session_start();
	session_unset();
	session_destroy();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
	//redirigim a la pagina inicial de nou
	header("Location: ./pagina_sessions_01.php");
	die();

