<?php include "admin_sidebar.php";
    require_once "includes.php";  

 ?>
<section> 
  <h1>Inserir Post</h1> 
  <div class="form">
    <form action="adicionapost.php" method="post" style="inline-block">
      <label for="titulo">Titulo</label><br>  
      <input type="text" name="titulo"><br>
      <label for="subtitulo">Subtitulo</label><br>
      <input type="text" name="subtitulo"><br>      
      <label for="texto">Texto</label><br>
      <textarea cols="30" rows="5" name="texto" placeholder="Digite o Texto Aqui"></textarea><br>
      <label for="imagem">Imagem</label><br>
      <input type="file" name="imagem"><br>
      <label for="categoria">Categoria</label><br>
      <input type="text" name="categoria"><br>
      <label for="status">Status</label><br>
      <input type="text" name="status"><br><br>
      <div class="formbutton">  
      <input type="submit" class="icon-search icon-large" name="Inserir post"><br>
      </div>
    </form>
  </div>
</section>

<?php include "footer.php" ?> 