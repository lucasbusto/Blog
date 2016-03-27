<?php include "header.php" ?>
<?php include "admin_sidebar.php" ?>
<?php require_once("classe/conecta.php"); 
 require_once('classe/banco-categoria.php'); 
?>
<section>  
  <div class="form">
     <?php           
          $id = $_POST['id'];
          echo $id;
          $categorias = buscaCategoria($conexao,$id);

          foreach ($categorias as $categoria) :

      ?> 
    <form action="alteracategoria.php" method="post" style="inline-block">
      <label for="titulo">Título</label><br>  
      <input type="text" name="titulo" value="<?=$categoria->titulo?>"><br>      
      <label for="status">Status</label><br>
      <input type="text" name="status" value="<?=$categoria->status?>"><br><br>
      <div class="formbutton">  
      <input type="text" name="id" value="<?=$categoria->id?>">
      <input type="submit" value="Editar">
      </div>
    </form>
    <?php 
        endforeach
    ?>
  </div>
</section>

<?php include "footer.php" ?> 