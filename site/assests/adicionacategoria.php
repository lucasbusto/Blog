<?php require_once("header.php");
require_once("classe/banco-categoria.php");
require_once("Categoria.php");
include "classe/logica-usuario.php";


$categoria = new Categoria;
	$categoria->titulo = $_POST['titulo'];	
	$categoria->status = $_POST['status'];;



if(insereCategoria($conexao, $categoria)) { 	?>
	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>"A categoria foi adicionada com sucesso"</p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
	</div>
<?php } else {
	$msg = mysqli_error($conexao);
?>	<div class="mensagem">
		<i class="fa fa-check"></i>
		<p>A categoria não foi adicionado com sucesso: <?= $msg?></p>
		<a href="editarpost.php"><button>Voltar ao Menu</button></a>
		<a href="index.php"><button>Voltar a Home</button></a>
   </div>		
<?php 
}
?>



 <?php include("footer.php"); ?>