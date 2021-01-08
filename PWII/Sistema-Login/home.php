<?php 

	require_once 'conexao.php';

	session_start();

	if (!isset($_SESSION['logado'])) {
		header('Location: index.php');
	}

	$id_usu = $_SESSION['codUsu'];
	$sql = "SELECT * FROM tbusuarios WHERE codUsu = '$id_usu'";
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($con);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Página restrita</title>
</head>
<body>	
	<h1>Olá <?php echo $dados['nomeUsu']; ?></h1>

	<a href="logout.php">Sair</a>

</body>
</html>