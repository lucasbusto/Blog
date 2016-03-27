<?php require_once("header.php");
require_once("classe/banco-post.php");
require_once("Post.php");
include "classe/logica-usuario.php";



$post = new Post;
	$post->titulo = $_POST['titulo'];
	$post->subtitulo = $_POST['subtitulo'];
	$post->texto = $_POST['texto'];
	$post->imagem = $_POST['imagem'];
	$post->categoria = $_POST['categoria'];
	$post->status = $_POST['status'];


if(inserePost($conexao, $post)) { 	?>
	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>"O post foi adicionado com sucesso"</p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>	
<?php } else {
	$msg = mysqli_error($conexao);
?>	<div class="mensagem">
		<i class="fa fa-times"></i>
		<p>O post não foi adicionado com sucesso: <?= $msg?></p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>	
<?php 
}
?>



 <?php include("footer.php"); ?>