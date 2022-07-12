<?php
//Header
include_once 'includes/header.php';
?>

<div class="form">
	<div class="input-box">
		<h3 class="title-form"> Novo cliente </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input">
				<input type="text" name="nome" id="nome" class="input-form" required>
				<label for="nome" class="label">Nome: </label>
			</div>

			<div class="input">
				<input type="text" name="sobrenome" id="sobrenome" class="input-form" required>
				<label for="sobrenome" class="label">Sobrenome: </label>
			</div>

			<div class="input">
				<input type="text" name="email" id="email" class="input-form" required>
				<label for="email" class="label">Email: </label>
			</div>

			<div class="input">
				<input type="text" name="idade" id="idade" class="input-form" required>
				<label for="idade" class="label">Idade: </label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn-cadastrar" onclick="adicionar()">Cadrastar</button>
			<a href="index.php" class="btn-lista">Lista de clientes</a>

		</form>
	</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>