<?php
require_once("conecta.php");			
require_once("Post.php");	
require_once("Categoria.php");	

function carregaCategorias($conexao) {
	$categorias = array();
	$resultado = mysqli_query($conexao, "SELECT titulo, id, status from categoria where status = '1'");
	
	while($categoria_atual = mysqli_fetch_assoc($resultado)) {
		$categoria =  new Categoria;
		$categoria->titulo = $categoria_atual["titulo"];
		$categoria->id = $categoria_atual['id'];
		//$categoria->titulo = $categoria_atual['titulo'];
		//$categoria->subtitulo = $categoria_atual['subtitulo'];
		//$categoria->texto = $categoria_atual['texto'];
		//$categoria->imagem = $categoria_atual['imagem'];
		$categoria->status = $categoria_atual['status'];
		//$categoria->categoria = $categoria;

		array_push($categorias, $categoria);
	}
	return $categorias;
}

function listaCategorias($conexao) {
	$categorias = array();
	$resultado = mysqli_query($conexao, "SELECT titulo, id, status from categoria");
	
	while($categoria_atual = mysqli_fetch_assoc($resultado)) {
		$categoria =  new Categoria;
		$categoria->titulo = $categoria_atual["titulo"];
		$categoria->id = $categoria_atual['id'];
		//$categoria->titulo = $categoria_atual['titulo'];
		//$categoria->subtitulo = $categoria_atual['subtitulo'];
		//$categoria->texto = $categoria_atual['texto'];
		//$categoria->imagem = $categoria_atual['imagem'];
		$categoria->status = $categoria_atual['status'];
		//$categoria->categoria = $categoria;

		array_push($categorias, $categoria);
	}
	return $categorias;
}

function insereCategoria($conexao, Categoria $categoria) {
	$query = "insert into categoria (titulo, status) values ('{$categoria->titulo}', '{$categoria->status}')";
	return mysqli_query($conexao, $query);
}

function alteraCategoria($conexao, Categoria $categoria) {
	$query = "update categoria set titulo = '{$categoria->titulo}', status = '{$categoria->status}' where id = '{$categoria->id}'";
	echo $query;
	return mysqli_query($conexao, $query);
}

function buscaCategoria($conexao, $id) {
	$query = "SELECT titulo, id, status FROM categoria  where id = {$id}";
	echo $query;
	$categorias = array();
	$resultado = mysqli_query($conexao, $query);
	while($categoria_atual = mysqli_fetch_assoc($resultado)) {
		$categoria = new Categoria;
		
		//$categoria->titulo = $categoria_atual["categoria_nome"];
		$categoria->id = $categoria_atual['id'];
		$categoria->titulo = $categoria_atual['titulo'];
		//$categoria->subtitulo = $categoria_atual['subtitulo'];
		//$categoria->texto = $categoria_atual['texto'];
		//$categoria->imagem = $categoria_atual['imagem'];
		$categoria->status = $categoria_atual['status'];
		//$categoria->categoria = $categoria_atual['id_categoria'];

		array_push($categorias, $categoria);
	}
	return $categorias;
	//return mysqli_fetch_assoc($resultado);
}

function mostraCategoria($conexao, $id) {
	$query = "update categoria set status = '1' where id = '{$id}'";
	echo $query;
	return mysqli_query($conexao, $query);
}

function removeCategoria($conexao, $id) {
	$query = "update categoria set status = '0' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}