<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-excluir'])) {
				
		$codPro = mysqli_escape_string($connection,$_POST['codPro']);

		$sql = "DELETE FROM tbProdutos WHERE codPro = '$codPro'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Produto excluido com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../index.php');	
		}
	}
