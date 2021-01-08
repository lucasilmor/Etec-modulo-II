<?php 

	require_once 'conexao.php';

	session_start();

	if (isset($_POST['btnEntrar'])) {
		
		$erros = array();

		$login = mysqli_escape_string($con,$_POST['login']);
		$senha = mysqli_escape_string($con,$_POST['senha']);

		if (empty($login) or empty($senha)) {
			$erros[] = "<li>O campo login ou senha precisa ser preenchido.</li></br>";
		}
		else{

			$sql = "SELECT loginUsu FROM tbUsuarios WHERE loginUsu = '$login'";

			$resultado = mysqli_query($con,$sql);

			if (mysqli_num_rows($resultado) > 0 ) {

				$sql = "SELECT * FROM tbUsuarios WHERE loginUsu = '$login' AND senhaUsu = '$senha'";

				$resultado = mysqli_query($con,$sql);

				if (mysqli_num_rows($resultado) == 1) {
			
					$dados = mysqli_fetch_array($resultado);

					mysqli_close($con);
					
					$_SESSION['logado'] = true;

					if ($_SESSION['codUsu'] = $dados['codUsu'] != 1) {
						header('Location: home.php');
					}else if ($_SESSION['codUsu'] = $dados['codUsu'] == 1) {
						header('Location: visualizar.php');
					}
							
				}else{
					
					$erros[] = "<li>Usuário e senha não conferem.</li></br>";
				}
				
			}else{

				$erros[] = "<li>Usuário inexistente.</li></br>";
			}
		}		
	}
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema de Login</title>
</head>
<body>
	<h1>Sistema de Login</h1>

	<?php 
		if(!empty($erros)) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}

	 ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

		Login: <input type="text" name="login"><br><br>
		
		Senha: <input type="password" name="senha"><br><br>
		
		<button type="submit" name="btnEntrar">Entrar</button>

	</form>

</body>
</html>