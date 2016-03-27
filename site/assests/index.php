<?php

include("classe/conexao.php");

$consulta = "SELECT titulo, texto FROM post";
$con = $mysqli->query($consulta) or die($mysql->error);
$dado = $con->fetch_array();

/*
$consulta = "SELECT titulo from categoria";
$con2 = $mysqli->query($consulta) or die($mysql->error);
$dado2 = $con2->fetch_array();
*/

?>
<?php include "header.php" ?>
<?php require_once("classe/conecta.php");
 require_once('classe/banco-categoria.php');
 require_once('classe/banco-post.php');
?>
<?php include "sidebar.php" ?>

<h1>Noticias para os Alienados!</h1>
<section>
 <!-- <img src="et.jpg" alt="et"> -->

  <?php
          $id = $_POST['id'];
          var_dump($id);

         if (isset($id)) {
             $posts = carregaPost($conexao,$id);
          }else{
             $posts = todosPosts($conexao);
            echo "";
          }



          foreach ($posts as $post) :

      ?>
    <pre></pre>
  <div class="post">

        <img src="img\<?=$post->imagem?>" alt="et">
        <h3><?php echo $post->titulo ?></h3>
        <p><?php echo $post->texto ?></p>
        <br>
        <br>
  </div>
  <?php
        endforeach
  ?>
</section>

<?php include "footer.php" ?>
