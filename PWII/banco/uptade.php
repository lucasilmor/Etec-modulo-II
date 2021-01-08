<?php

	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_errno($con)) {
		echo "Erro Ao conectar";
	}else{
		$sql1 = "UPDATE tbClientes SET estado = 'Santa Catarina' WHERE estado = 'São Paulo' ";

		mysqli_query($con, $sql1);

		$sql2 = "UPDATE tbClientes SET cidade = 'Balneário Camboriú' WHERE cidade = 'São Paulo' ";

		mysqli_query($con, $sql2);

		$sql3 = "SELECT * FROM tbClientes WHERE estado = 'Santa Catarina' ";

		$resultado = mysqli_query($con, $sql3);

		echo "<h2>Clientes</h2>";

		$pessoa = mysqli_fetch_array($resultado);

		echo $pessoa['nome'] . ", " . $pessoa['estado'] . ", " . $pessoa['cidade'] . "<br>";

		mysqli_close($con);
		}
?>