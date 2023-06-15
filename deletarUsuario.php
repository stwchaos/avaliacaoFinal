<?php
	include_once "bancoweb.php";
	include_once "usuario.php";

	if(verificarUsuario() == 'false'){
		header('Location: index.php');
	} else {
		deletarUsuario($_GET['id']);
		$usuario = $_SESSION['usuarioAtual'];
		if($usuario->getId() == $_GET['id']){
			header('Location: logout.php');
		}else{
			header('Location: lista.php');
		}
	}
?>