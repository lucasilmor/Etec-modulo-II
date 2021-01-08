<?php
	
	require_once ('conexao.php');

		$ins = "INSERT INTO tbulientes 
			values('$_POST[codUsu]','$_POST[nomeUsu]','$_POST[loginUsu]', $_POST[senhaUsu])";

			if(mysqli_query($con, $ins)) {
				echo "Registro inserido";
			}else{
				echo "Erro ao inserir";
			}
			mysqli_close($con);
	
?>

