<?php

$voto = $_GET['voto'];


	
	if (!isset($_COOKIE['voto'])) {

		setcookie("voto", $voto,time()+10);

		
		$msg = "<h1>Obrigado por votar!!!";
	}
	else{

		$msg = "<h1>Você já votou uma vez.";

	}

	echo $msg;
 ?>
