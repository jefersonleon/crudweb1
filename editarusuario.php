<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM tbusuario WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);//executou o script e conectou
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="php_action/updateusuario.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="login" value="<?php echo $dados['login'];?>" id="login">
				<label for="login">Login</label>
			</div>

			<div class="input-field col s12">
				<input type="password" value="<?php echo $dados['senha'];?>" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['telefone'];?>" name="fone" id="fone">
				<label for="idade">Idade</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['foto'];?>" name="foto" id="foto">
				<label for="foto">Foto</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['datanasc'];?>" name="data" id="data">
				<label for="data">Data Nascimento</label>
			</div>
			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="usuario.php" class="btn green"> Lista de Usuários </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
