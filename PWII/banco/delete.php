<?php

	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_errno($con)) {
		echo "Erro Ao conectar";
	}else{
		$sql = "DELETE FROM tbClientes WHERE nome = 'ana' ";
		mysqli_query($con, $sql);

		$sql2 = "DELETE FROM tbClientes WHERE codigo = 241 ";
		mysqli_query($con, $sql2);

		echo "<h2>REGISTRO EXCLUIDO!!!</h2>";
		
		mysqli_close($con);

	}
?>