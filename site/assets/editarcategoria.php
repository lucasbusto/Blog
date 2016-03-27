<?php include "admin_sidebar.php";
    require_once "includes.php";  

 ?>

<h1>Editar Categoria</h1> 
<section>
  <div class="table">
    <table>
      <thead>
         <th>Id da Categoria</th>
         <th>Titulo</th>
         <th>O que fazer?</th>
         <th>Status</th> 
      </thead>
      <?php 
          $categorias = listaCategorias($conexao);
          foreach ($categorias as $categoria) :

      ?> 
      <tbody>
          <tr> 
             <td><?php echo $categoria->id ?></th>
             <td><?php echo $categoria->titulo ?></td> 
             <td>
              <form action="edicaocategoria.php" method="post">
                <div class="amarelo">
                  <input type="hidden" name="id" value="<?=$categoria->id?>">
                  <input type="submit" value="Editar">
                </div>                
              </form>
              <form action="publicarcategoria.php" method="post">
                <div class="verde">
                  <input type="hidden" name="number" value="<?=$categoria->id?>">
                  <input type="submit" value="Publicar">
                </div>                
              </form>
              <form action="excluircategoria.php" method="post">
                <div class="vermelho">
                  <input type="hidden" name="num" value="<?=$categoria->id?>">
                  <input type="submit" value="Remover">
                </div>                
              </form>
             <td><?php echo $categoria->status ?></td>              
          </tr>     
      </tbody>
      <?php 
        endforeach
       ?>
    </table>
  </div>  
</section>

<?php include "footer.php" ?> 