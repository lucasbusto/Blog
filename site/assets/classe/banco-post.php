<?php
require_once("classe/conecta.php");	
require_once("Post.php");	
require_once("Categoria.php");	

function todosPosts($conexao) {
	$posts = array();
	
		$query = "SELECT titulo, subtitulo, imagem, texto from post where status = '1'";			
	echo $query;
	$resultado = mysqli_query($conexao, $query);
	while($post_atual = mysqli_fetch_assoc($resultado)) {
		$post = new Post;
		//$categoria =  new Categoria;
		//$categoria->titulo = $post_atual["categoria_nome"];
		//$post->id = $post_atual['id'];
		$post->titulo = $post_atual['titulo'];
		$post->subtitulo = $post_atual['subtitulo'];
		$post->texto = $post_atual['texto'];
		$post->imagem = $post_atual['imagem'];
		//$post->status = $post_atual['status'];
		//$post->categoria = $categoria;

		array_push($posts, $post);
	}
	return $posts;
}		



function carregaPost($conexao, $id) {
	$posts = array();
	if($id === null)
		$query = "SELECT titulo, subtitulo, imagem, texto from post where status = '1'";
	else
		$query = "SELECT titulo, subtitulo, imagem, texto from post where id_categoria = {$id} and status = '1'";			
	echo $query;
	$resultado = mysqli_query($conexao, $query);
	while($post_atual = mysqli_fetch_assoc($resultado)) {
		$post = new Post;
		//$categoria =  new Categoria;
		//$categoria->titulo = $post_atual["categoria_nome"];
		//$post->id = $post_atual['id'];
		$post->titulo = $post_atual['titulo'];
		$post->subtitulo = $post_atual['subtitulo'];
		$post->texto = $post_atual['texto'];
		$post->imagem = $post_atual['imagem'];
		//$post->status = $post_atual['status'];
		//$post->categoria = $categoria;

		array_push($posts, $post);
	}
	return $posts;
}		
function listaPost($conexao) {
	$posts = array();
	$resultado = mysqli_query($conexao, "SELECT post.titulo, post.id, post.status, categoria.titulo AS categoria_nome FROM post AS post JOIN categoria AS categoria ON categoria.id=post.id_categoria");
	while($post_atual = mysqli_fetch_assoc($resultado)) {
		$post = new Post;
		$categoria =  new Categoria;
		$categoria->titulo = $post_atual["categoria_nome"];
		$post->id = $post_atual['id'];
		$post->titulo = $post_atual['titulo'];
		//$post->subtitulo = $post_atual['subtitulo'];
		//$post->texto = $post_atual['texto'];
		//$post->imagem = $post_atual['imagem'];
		$post->status = $post_atual['status'];
		$post->categoria = $categoria;

		array_push($posts, $post);
	}
	return $posts;
}

function inserePost($conexao, Post $post) {
	$query = "insert into post (titulo, subtitulo, texto, imagem, id_categoria, status) values ('{$post->titulo}', '{$post->subtitulo}', '{$post->texto}', '{$post->imagem}', '{$post->categoria}', '{$post->status}')";
	return mysqli_query($conexao, $query);
}
function alteraPost($conexao, Post $post) {
	$query = "update post set titulo = '{$post->titulo}', subtitulo = '{$post->subtitulo}', texto = '{$post->texto}', imagem = '{$post->imagem}', id_categoria = '{$post->categoria}', status = '{$post->status}' where id = '{$post->id}'";
	
	return mysqli_query($conexao, $query);
}


function buscaPost($conexao, $id) {
	$query = "SELECT titulo, subtitulo, id, texto, imagem, id_categoria, status FROM post  where id = {$id}";
	
	$posts = array();
	$resultado = mysqli_query($conexao, $query);
	while($post_atual = mysqli_fetch_assoc($resultado)) {
		$post = new Post;
		$categoria =  new Categoria;
		//$categoria->titulo = $post_atual["categoria_nome"];
		$post->id = $post_atual['id'];
		$post->titulo = $post_atual['titulo'];
		$post->subtitulo = $post_atual['subtitulo'];
		$post->texto = $post_atual['texto'];
		$post->imagem = $post_atual['imagem'];
		$post->status = $post_atual['status'];
		$post->categoria = $post_atual['id_categoria'];

		array_push($posts, $post);
	}
	return $posts;
	//return mysqli_fetch_assoc($resultado);
}

function mostraPost($conexao, $id) {
	$query = "update post set status = '1' where id = '{$id}'";
	
	return mysqli_query($conexao, $query);
}

function removePost($conexao, $id) {
	$query = "update post set status = '0' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}