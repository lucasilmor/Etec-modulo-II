<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nomePro = mysqli_escape_string($connection,$_POST['nomePro']);
		$categoriaPro = mysqli_escape_string($connection,$_POST['categoriaPro']);
		$marcaPro = mysqli_escape_string($connection,$_POST['marcaPro']);
		$precoPro = mysqli_escape_string($connection,$_POST['precoPro']);
		$estoquePro = mysqli_escape_string($connection,$_POST['estoquePro']);
		$codPro = mysqli_escape_string($connection,$_POST['codPro']);

		$sql = "UPDATE tbprodutos SET nomePro= '$nomePro', categoriaPro = '$categoriaPro', marcaPro = '$marcaPro', precoPro = '$precoPro', estoquePro = $estoquePro WHERE codPro = '$codPro'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
