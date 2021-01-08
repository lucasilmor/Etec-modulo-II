<?php

	require_once 'conexao.php';
	
			$sql = "INSERT INTO tbUsuarios(nomeUsu,loginUsu,senhaUsu)VALUES('$_POST[nome]','$_POST[login]','$_POST[senha]')";
	
		if(mysqli_query($con,$sql)){
	
			header('Location: visualizar.php');
	
		}else{
	
			echo "Erro ao inserir usuário: ".mysqli_error($con);
	
		}

		mysqli_close($con);
	
?>
