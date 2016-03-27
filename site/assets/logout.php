<?php require_once("header.php");
require_once("classe/banco-usuario.php");
require_once("usuario.php");


 if(isset($_COOKIE["usuario_logado"])) { 
		setcookie("usuario_logado", "", time()-3600);
	?>
	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>"O usuario foi deslogado com sucesso. Ate Mais!"</p>
		<?php if(isset($_SESSION["usuario_logado"])) {?>
			<h5>Você está logado como <?=$_COOKIE["usuario_logado"] ?></h5>
		<?php } ?>
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