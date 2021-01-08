<?php

	require_once 'conexao.php';

	$codUsu = $_GET['codUsu'];

	$sql = "DELETE FROM `tbusuarios` where `tbusuarios`. `codUsu` = '$codUsu' ";
	$resultado = mysqli_query($con,$sql);

	header('Location: visualizar.php');

	
?>