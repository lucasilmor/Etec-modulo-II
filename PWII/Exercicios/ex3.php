<?php 

$user = $_POST['nome'];
$senha = $_POST['senha'];


	if($user  != "etecia" || $senha != "etecia238"){
        echo "<h2>Você não tem permissão de visualizar essa página</h2>";
	}else{
		echo "<h2>Autenticação  realizada  com  sucesso!!!</h2>";
	}

 ?>