<?php
require_once("classe/conecta.php");	


function verificausuario($conexao, Usuario $usuario) {
	setcookie("usuario_logado", $usuario->senha);
	$senhamd5 = md5($usuario->senha);
		$query = "select  * from usuarios where login='{$usuario->login}' and senha='{$senhamd5}'";		
	echo $query;
	$resultado = mysqli_query($conexao, $query);	
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}		