<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<?php
$codigo = filter_input(INPUT_GET, "codUsu");
$nome = filter_input(INPUT_GET, "nomeUsu");
$login = filter_input(INPUT_GET, "loginUsu");
$senha = filter_input(INPUT_GET, "senhaUsu");
  ?>
</head>
<body>

	<h1>Editar usuário</h1>

	<form action="editar.php" method="GET">

		<input type="hidden" name="codigo" value="<?php echo $codigo ?>" />

		Nome:<input type="text" name="nome" value="<?php echo $nome ?>" > <br><br>

		Login:<input type="text" name="login" value="<?php echo $login ?>" > <br><br>
		
		Senha:<input type="password" name="senha" value="<?php echo $senha  ?>" > <br><br>
		
		<input type="submit" value="Alterar" name="alterar">

	</form>
			
</body>
</html>




