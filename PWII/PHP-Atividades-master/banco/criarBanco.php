<?php 
	$localhost = 'localhost';
	$user_name = 'root';
	$senha = '';

	$con = mysqli_connect($localhost,$user_name,$senha);
	
	$db = "Create database dbLivraria";

	if (mysqli_query($con, $db)) {
		echo "Banco criado";

	}else{
		echo "ERRO ao criar o banco";
	}


	mysqli_close($con);
 ?>