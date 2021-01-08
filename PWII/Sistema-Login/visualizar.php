<?php
	
	require_once 'conexao.php';

	$sql = "SELECT * FROM tbusuarios";
	$resultado = mysqli_query($con,$sql);
	$dados = mysqli_fetch_array($resultado);

  ?>


<h1>Usuários</h1>

<form action="cadastro.html" method="POST">
<input type="submit" name="cadastro" value="Cadastrar">
</form>

<table border = 1 cellpadding="10" align="center">
	<tr>
		<td>codUsu</td>
		<td>nomeUsu</td>
		<td>loginUsu</td>
		<td>senhaUsu</td>
		<td>AÇÕES</td>
	</tr>

	<?php
	do{

	?>
	<tr>
		<td><?php echo $dados['codUsu']; ?></td>
		<td><?php echo $dados['nomeUsu']; ?></td>
		<td><?php echo $dados['loginUsu']; ?></td>
		<td><?php echo $dados['senhaUsu']; ?></td>
		<td>
			<a href="<?php echo "edit.php?codUsu=" . $dados['codUsu'] . "&nomeUsu=" . $dados['nomeUsu'] . "&loginUsu=" . $dados['loginUsu'] . "&senhaUsu=" . $dados['senhaUsu'] ?>">Editar Usuário</a><br>
			<a href="deleter.php?codUsu=<?php echo $dados['codUsu']; ?>">Deletar Usuário</a>
		</td>
	</tr>
<?php } while($dados = mysqli_fetch_array($resultado));  ?>
	
</table>

<a href="logout.php">Sair</a>
