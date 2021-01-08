<?php

	$localhost = 'localhost';
	$user_name = 'root';
	$senha = '';
	$db = 'dbLivraria';

	$con = mysqli_connect($localhost,$user_name,$senha,$db);  
	if (mysqli_errno($con)) {
		echo "ERRO AO CONECTAR";
	}else{
		$sql = "SELECT * FROM tbClientes";

		$dados = mysqli_query($con, $sql);

		echo "<h2>Dados</h2>";

		while($pessoa = mysqli_fetch_array($dados)){
			echo 
			$pessoa['codigo'] . " " . $pessoa['nome'] . " - " .$pessoa['endereco'] . " - ". $pessoa['bairro']." - ".$pessoa ['cidade'] . $pessoa['telcel'] . "<br>";
		} 

		mysqli_close($con);

	}

  ?>