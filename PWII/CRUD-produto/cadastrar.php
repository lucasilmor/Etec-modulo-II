<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Produto</h3>
			
			<form action="conexao/criar_produtos.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nomePro" id="nomePro">
					<label for="nome">Nome do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="categoriaPro" id="categoriaPro">
					<label for="sobrenome">Categoria do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marcaPro" id="marcaPro">
					<label for="email">Marca do Produto</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="precoPro" id="precoPro">
					<label for="idade">Preço do Produto</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="estoquePro" id="estoquePro">
					<label for="idade">Quantidade em Estoque</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn pink darken-1">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>