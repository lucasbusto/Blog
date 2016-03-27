<?php include "header.php"; 
	  require_once "classe/banco-post.php";	 
	  require_once "classe/banco-categoria.php";	
	  require_once "classe/banco-usuario.php"; 
	  include "admin_sidebar.php"; ?>	

<?php if(!isset($_COOKIE["usuario_logado"])) { 
		  header("Location:login.php") ?>      
      ?>
<script>alert("Usuario não logado")</script>
 <?php }else { ?>
	<?php if(isset($_COOKIE["usuario_logado"])) {?>
			<br><br><center><h4>Voce esta logado como <?=$_COOKIE["usuario_logado"] ?><a href="logout.php"> Deslogar?</a></h4></center>
		<?php } ?>
<?php  
 } ?>