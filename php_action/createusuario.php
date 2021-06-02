<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$login = clear($_POST['login']);
	$senha = clear($_POST['senha']);
	$fone = clear($_POST['fone']);
	$foto = clear($_POST['foto']);
	$data = clear($_POST['data']);
    $senhacript = password_hash($senha, PASSWORD_DEFAULT);

	$sql = "INSERT INTO tbusuario (nome, login, senha, telefone, foto, datanasc) VALUES ('$nome', '$login', '$senhacript', '$fone','$foto','$data')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../usuario.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../usuario.php');
	endif;
endif;