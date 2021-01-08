<?php 
	require_once 'conexao/conexao.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbprodutos WHERE codPro = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar cliente</h3>
			
			<form action="conexao/alterar_produtos.php" method="POST">

				<input type="hidden" name = "codPro" value="<?php echo $dados['codPro']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nomePro" id="nomePro" value="<?php echo $dados['nomePro']; ?>">
					<label for="nome">Nome do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="categoriaPro" id="categoriaPro" value="<?php echo $dados['categoriaPro']; ?>"
					>
					<label for="sobrenome">Categoria do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marcaPro" id="marcaPro" value="<?php echo $dados['marcaPro']; ?>">
					<label for="email">Marca do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="precoPro" id="precoPro" value="<?php echo $dados['precoPro']; ?>">
					<label for="idade">Preço do Produto</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="estoquePro" id="estoquePro" value="<?php echo $dados['estoquePro']; ?>">
					<label for="idade">Quantidade em estoque</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn purple darken-4">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>