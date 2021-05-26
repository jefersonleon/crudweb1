<?php
	// Conexão
	include_once 'php_action/db_connect.php';
	require_once 'includes/header.php';
   
    // Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbusuario WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

 

<div><h1>Olá, <?php echo $dados['nome']; ?></h1></div>
  <div class="divider"></div>
  <div class="section">
    <h5>Desenvolvimentos de sistemas</h5>
    <p>Sistemas para automatizar clientes</p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5> Equipes motivadas</h5>
    <p>A equipe se esforça o máximo para tornar a vida das pessoas melhores.</p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>Usuários</h5>
    <p>Super bacana o controle de Usuários!!!</p>
  </div>


<?php
  // Footer
include_once 'includes/footer.php';

?>
