<?php 

	session_start();

	require_once 'conexao.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nomePro = mysqli_escape_string($connection,$_POST['nomePro']);
		$categoriaPro = mysqli_escape_string($connection,$_POST['categoriaPro']);
		$marcaPro = mysqli_escape_string($connection,$_POST['marcaPro']);
		$precoPro = mysqli_escape_string($connection,$_POST['precoPro']);
		$estoquePro = mysqli_escape_string($connection,$_POST['estoquePro']);

		$sql = "INSERT INTO tbprodutos(nomePro,categoriaPro,marcaPro,precoPro,estoquePro)
		VALUES('$nomePro','$categoriaPro','$marcaPro','$precoPro','$estoquePro')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
