<?php

require_once 'conexao.php';
session_start();

if(isset($_POST['enviar'])){

	$login = mysqli_escape_string($con,$_POST['Usulogin']);
	$senha = mysqli_escape_string($con,$_POST['Ususenha']);

	$sql = "SELECT * from tbusuarios where loginUsu = '$login' and senhaUsu = $senha = '$senha'";

			$resultado = mysqli_query($con,$sql);

			if (mysqli_num_rows($resultado) == 1) {
				header('Location: tela_user.php');
			}else{
				echo "Senha não existente";
			}

}


  ?>