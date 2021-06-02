<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}


if(isset($_POST['btn-editar'])):
	$nome = clear($_POST['nome']);
	$login = clear($_POST['login']);
	$senha = clear(password_hash($_POST['senha'],PASSWORD_DEFAULT));
	$fone = clear($_POST['fone']);
	$foto = clear($_POST['foto']);
	$data = clear($_POST['data']);
    


	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE tbusuario SET nome = '$nome', login = '$login', senha = '$senha', telefone = '$fone', datanasc = '$data'  WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../usuario.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../usuario.php');
	endif;
endif;