<?php include "header.php"; 
	  require_once "classe/banco-post.php";	 
	  require_once "classe/banco-categoria.php";	
	  require_once "classe/banco-usuario.php"; ?>


<?php if(!isset($_COOKIE["usuario_logado"])) { 
		    
      ?>
<script>alert("Você não esta logado ou não tem permissão para acessar está funcionalidade.")</script>
 <?php }else { header("Location:editarpost.php"); ?>
	<script>alert("Você já está logado")</script>
<?php  
 } ?>
<h1>Bem Vindo !</h1>


<div class="form-senha">
	<h2>Login</h2>
	<form action="logar.php" method="post">

	
		<label for"email">Email</label>
		<input type="email" name="email">	
		<label for="senha">Senha</label>
		<input type="password" name="senha">	
		<input type="submit" name="login" value="Entrar">
		

	</form>
</div>
<?php include "footer.php" ?>