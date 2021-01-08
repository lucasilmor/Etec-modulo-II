<?php
require_once 'conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Sistema Login</h1>

<form action="logar.php" method="POST">
	Login<input type="text" name="Usulogin"> </p>
	Senha<input type="password" name="Ususenha"> </p>
	<input type="submit" name="enviar" value="LOGAR"></p>

</form>

</body>
</html>