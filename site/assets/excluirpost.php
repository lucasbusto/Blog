<?php require_once("header.php");
require_once("classe/banco-post.php");
require_once("Post.php");
include "classe/logica-usuario.php";


$post = new Post;
	$post->id = $_POST['num'];
	

if(array_key_exists('status', $_POST)) {
	$status = "true";

}else{
	$status = "false";
}

$post->status = $status;


if(removePost($conexao, $post->id)) { 	?>
	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>"O post foi removido com sucesso"</p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>	
<?php } else {
	$msg = mysqli_error($conexao);
?>	<div class="mensagem">
		<i class="fa fa-times"></i>
		<p>O post não foi removido com sucesso: <?= $msg?></p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>	
<?php 
}
?>



 <?php include("footer.php"); ?>