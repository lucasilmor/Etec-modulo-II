<?php
	
	require_once 'conexao.php';
	
	$codigo = filter_input(INPUT_GET, "codigo");
	$nome = filter_input(INPUT_GET, "nome");
	$login = filter_input(INPUT_GET, "login");
	$senha = filter_input(INPUT_GET, "senha");
	
	$sql = "UPDATE tbusuarios SET nomeUsu='$nome', loginUsu='$login', senhaUsu='$senha' where codUsu = '$codigo' ";
	$resultado = mysqli_query($con,$sql);
	header('Location: visualizar.php');
	
			
?>
