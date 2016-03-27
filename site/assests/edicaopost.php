<?php include "header.php" ?>
<?php include "admin_sidebar.php" ?>
<?php require_once("classe/conecta.php"); 
 require_once('classe/banco-post.php'); 
?>
<section>  
  <div class="form">
     <?php           
          $id = $_POST['id'];
         
          $posts = buscaPost($conexao,$id);

          foreach ($posts as $post) :

      ?> 
    <form action="alterapost.php" method="post" style="inline-block">
      <label for="titulo">Titulo</label><br>  
      <input type="text" name="titulo" value="<?=$post->titulo?>"><br>
      <label for="subtitulo">Subtítulo</label><br>
      <input type="text" name="subtitulo" value="<?=$post->subtitulo?>"><br>      
      <label for="texto">Texto</label><br>
      <textarea cols="30" rows="5" name="texto" placeholder="Digite o Texto Aqui"><?=$post->texto?></textarea><br>
      <label for="imagem">Imagem</label><br>
      <input type="file" name="imagem" value="<?=$post->imagem?>"><br>
      <label for="categoria">Categoria</label><br>
      <input type="text" name="categoria" value="<?=$post->categoria?>"><br>
      <label for="status">Status</label><br>
      <input type="text" name="status" value="<?=$post->status?>"><br><br>
      <div class="formbutton">  
      <input type="hidden" name="id" value="<?=$post->id?>">
      <input type="submit" value="Editar">
      </div>
    </form>
    <?php 
        endforeach
    ?>
  </div>
</section>

<?php include "footer.php" ?> 