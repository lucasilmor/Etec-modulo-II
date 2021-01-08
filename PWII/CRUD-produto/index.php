<?php 

	require_once 'conexao/conexao.php';

	
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>


<div class="row">
		<div class="col s12 m6 push-m3">
			<h2 class="light">Produtos</h3>
			<table class="row">
			<thead class="card-panel pink darken-1">
				<tr>
					<th>Nome</th>
					<th>Categoria</th>
					<th>Marca</th>
					<th>Preço</th>
					<th>Estoque</th>
					<th colspan="2" >Ações</th>
				</tr>				
			</thead>


			<tbody>
				<?php 

					$sql = "SELECT * FROM tbProdutos";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>


					<tr>
							<td><?php echo $dados['nomePro']; ?></td>
							<td><?php echo $dados['categoriaPro']; ?></td>
							<td><?php echo $dados['marcaPro']; ?></td>
							<td><?php echo $dados['precoPro']; ?></td>
							<td><?php echo $dados['estoquePro']; ?></td>

							<td><a href="alterar.php?id=<?php echo $dados['codPro']; ?>" class="btn-floating purple darken-4"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['codPro']; ?>" class="btn-floating pink darken-1 modal-trigger"><i class="material-icons">delete</i></a></td>

							<div id="modal<?php echo $dados['codPro']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o cliente?</p>
							    </div>
							    <div class="modal-footer">
							      

							      	<form action="conexao/excluir_produto.php" method="POST">
							      	<input type="hidden" name="codPro" value="<?php echo $dados['codPro']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn pink darken-1">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect  purple darken-4 btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<div class="">
			<a href="cadastrar.php" class="pink darken-1 btn-small">Adicionar Produto</a>
			</div><br><br><br><br>
			</div><br><br><br><br>
			</div><br><br><br><br>
			</div><br><br><br><br>
			


			<footer class="page-footer purple darken-4" >
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h7 class="white-text">Rodapé</h7>
                <p class="grey-text text-lighten-4">Cadastro de Produtos PWII</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h7 class="white-text">Links</h7>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/lLucasGod">github.com/lLucasGod</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container" align="center">
            © 2020 Copyright LucasGod
            </div>
          </div>
        </footer>


		</div>		
	</div>

<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>



