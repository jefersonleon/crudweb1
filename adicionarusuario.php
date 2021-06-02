<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="php_action/createusuario.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" value="xiru">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">child_care</i>
				<input type="text" name="login" id="login">
				<label for="login">Login</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="password" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="text" name="fone" id="fone">
				<label for="fone">Telefone</label>
			</div>
			<div class="input-field col s12">
			<!--<i class="material-icons prefix">insert_emoticon</i>-->
				<input class = "file-field input-field" type="file" name="foto" id="foto" accept="image/*, video/*">
				<label for="foto">Enviar imagem</label>
			</div>
			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" name="data" id="datanasc">
				<label for="datanasc">Data Nascimento</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="usuario.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
