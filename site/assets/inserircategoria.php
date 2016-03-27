<?php include "admin_sidebar.php";
    require_once "includes.php";  

 ?>
<h1>Inserir Categoria</h1> 
<section>  
  <div class="form">
    <form action="adicionacategoria.php" method="post" style="inline-block">
      <label for="titulo">Titulo</label><br>  
      <input type="text" name="titulo"><br>
      <label for="status">Status</label><br>
      <input type="text" name="status"><br><br>
      <div class="formbutton">      
        <input type="submit" name="Inserir categoria">
      </div>  
    </form>
  </div>
</section>
<?php include "footer.php" ?> 