<?php include "admin_sidebar.php";
    require_once "includes.php";  

 ?>
<h1>Editar Posts</h1> 
<section>
  <div class="table">
    <table>
      
       
      <thead>
         <th>Id do Post</th>
         <th>Titulo</th>
         <th>Categoria</th>
         <th>O que fazer?</th>
         <th>Status</th> 
      </thead>
      <tbody>
         <?php 
          $posts = listaPost($conexao);
          foreach ($posts as $post) :

      ?> 
          <tr> 
             <td><?php echo $post->id ?></th>
             <td><?php echo $post->titulo ?></td> 
             <td><?php echo $post->categoria->titulo ?></td>
             <td>
              <form action="edicaopost.php" method="post">
                <div class="amarelo">
                  <input type="hidden" name="id" value="<?=$post->id?>">
                  <input type="submit" value="Editar">
                </div>                
              </form>
              <form action="publicarpost.php" method="post">
                <div class="verde">
                  <input type="hidden" name="number" value="<?=$post->id?>">
                  <input type="submit" value="Publicar">
                </div>                
              </form>
              <form action="excluirpost.php" method="post">
                <div class="vermelho">
                  <input type="hidden" name="num" value="<?=$post->id?>">
                  <input type="submit" value="Remover">
                </div>                
              </form>
             <td><?php echo $post->status ?></td>
          </tr>               
               
      </tbody>
      <?php 
        endforeach
       ?>
    </table>
  </div>  
</section>

<?php include "footer.php" ?> 