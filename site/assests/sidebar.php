<div class="sidebar"> 
  <ul> 
		<?php 
          $categorias = carregaCategorias($conexao);
          foreach ($categorias as $categoria) :

      	?> 

        <form action="index.php" method="post">   
          
          <input type="hidden" name="id" value="<?=$categoria->id?>">
          <li><input type="submit" value="<?php echo $categoria->titulo ?>"></li>
            
        </form>
      	<?php 
        	endforeach
       	?>
  </ul>
</div>