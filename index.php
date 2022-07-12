<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
?>

<div class="alert"></div>

<div class="main">
	<div class="table">
		<h3 class="title-index"> Clientes </h3>
		<table class="table">
			<thead>
				<tr>
					<th>Nome: </th>
					<th>Sobrenome: </th>
					<th>Email: </th>
					<th>Idade: </th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);

				if(mysqli_num_rows($resultado) > 0):
				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome'];?></td>
					<td><?php echo $dados['sobrenome'];?></td>
					<td><?php echo $dados['email'];?></td>
					<td><?php echo $dados['idade'];?></td>
					<td>
						<a href="editar.php?id=<?php echo $dados['id']; ?>">
								<img src="css/img/pencil.png" class="img">
						</a>
					</td>
					<td>
						<a onclick="deletar()" href="#modal<?php echo $dados['id'];?>">
								<img src="css/img/trash.png" class="img-del">
						</a>
					</td>
				</tr>

				<!-- Modal Structure -->
				<div class="modal-container">
				  <div id="modal<?php echo $dados['id'];?>" class="modal">
				    <div class="modal-content">
				      <h4 class="title-modal">Confirme...</h4>
				      <p>Tem certeza que deseja deletar esse cliente?</p>
				    </div>

				    <div class="modal-footer">
				      <form action="php_action/delete.php" method="POST" class="modal-footer">
				      	<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
				      	<button type="submit" name="btn-deletar" class="btn-red">Sim, desejo deletar!</button>
				      	<a href="#!" class="btn-cancelar" onclick="modalClose()">Cancelar</a>
				      </form>
				    </div> 
				  </div>
				</div>

				<?php endwhile;
				else: ?>

					<tr>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>

				<?php	
				endif  	
				 ?>
			</tbody>
		</table>
		</br>
		<a href="adicionar.php" class="btn-adicionar">Adicionar cliente</a>


	</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>