<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id='$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="form">
	<div class="input-box">
		<h3 class="title-form"> Editar cliente </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input">
				<input type="text" value="<?php echo $dados['nome'];?>" name="nome" id="nome" class="input-form" required>
				<label for="nome" class="label">Nome: </label>
			</div>

			<div class="input">
				<input type="text" value="<?php echo $dados['sobrenome'];?>" name="sobrenome" id="sobrenome" class="input-form" required >
				<label for="sobrenome" class="label">Sobrenome: </label>
			</div>

			<div class="input">
				<input type="text" value="<?php echo $dados['email'];?>" name="email" id="email" class="input-form" required>
				<label for="email" class="label">Email: </label>
			</div>

			<div class="input">
				<input type="text" value="<?php echo $dados['idade'];?>" name="idade" id="idade" class="input-form" required>
				<label for="idade" class="label">Idade: </label>
			</div>

			<button type="submit" name="btn-editar" class="btn-cadastrar" onclick="adicionar()">Atualizar</button>
			<a href="index.php" class="btn-lista">Lista de clientes</a>
       
		</form>
	</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>