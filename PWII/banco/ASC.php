<?php

	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_errno($con)) {
		echo "Erro Ao conectar";
	}else{
		$sql = "SELECT * FROM tbClientes ORDER BY nome ASC ";

		$resultado = mysqli_query($con, $sql);

		echo "<h2>Clientes</h2>";

		while ($pessoa = mysqli_fetch_array($resultado)) {
			echo $pessoa['nome'] . "<br>";
		}
		mysqli_close($con);

	}
?>