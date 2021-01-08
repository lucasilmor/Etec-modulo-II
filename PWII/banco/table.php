<?php
	
	$localhost = 'localhost';
	$user_name = 'root';
	$senha = '';
	$db = 'dbLivraria';

	$con = mysqli_connect($localhost,$user_name,$senha,$db);  
	
	$tb = "Create Table tbClientes(
		codigo int,
		nome varchar(100),
		endereco varchar(100),
		bairro varchar(100),
		cidade varchar(100),
		estado varchar(100),
		telcel varchar(14)
		)";

		if (mysqli_query($con, $tb)) {
			echo "Tabela Criada";
		}else{
			echo "Erro";
		}

		mysqli_close($con);
?>



