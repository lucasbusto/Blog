<?php require_once("header.php");
require_once("classe/banco-usuario.php");
require_once("usuario.php");


$usuario = new Usuario;
	$usuario->login = $_POST['email'];
	$usuario->senha = $_POST['senha'];
	

if(verificausuario($conexao, $usuario) == true) { 
		setcookie("usuario_logado", $usuario->login, time()+300);
	?>
	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>"O usuario foi logado com sucesso"</p>
		<?php if(isset($_SESSION["usuario_logado"])) {?>
			<h5>Você está logado como <?=$_COOKIE["usuario_logado"] ?></h5>
		<?php } ?>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>	
<?php } else {
	$msg = mysqli_error($conexao);
?>	<div class="mensagem">
		<i class="fa fa-times"></i>
		<p>O usuario nao logado com sucesso: <?= $msg?></p>
		<?php setcookie("usuario_logado", "", time()-3600); ?>
	<!--	<a href="editarpost.php"><button>Voltar ao Menu</button></a> -->
		<a href="index.php"><button>Voltar a Home</button></a>
		<a href="login.php"><button>Voltar ao Login</button></a>
	</div>	
<?php 
}
?>



 <?php include("footer.php"); ?>