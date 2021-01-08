<?php
	
	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbLivraria";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);
	if (mysqli_errno($con)) {
		echo "ERRO AO CONECTAR";
	}else{

		$ins = "INSERT INTO tbClientes 
			values('$_POST[codigo]','$_POST[nome]','$_POST[endereco]','$_POST[bairro]',$_POST[cidade]','$_POST[estado]', $_POST[tel])";

			if(mysqli_query($con, $ins)) {
				echo "Registro inserido";
			}else{
				echo "Erro ao inserir";
			}
			mysqli_close($con);
	}
?>

