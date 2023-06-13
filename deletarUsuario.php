<!--deletarUsuario.php-->

<?php
	include_once "banco_dados.php";
	include_once "usuario.php";

	session_start();

	if (!verificarUsuario()) {
		header('Location: index.php');
		exit;
	}

	deletarUsuario($_GET['id']);

	$usuario = $_SESSION['usuarioAtual'];

	if ($usuario->getId() == $_GET['id']) {
		header('Location: logoff.php');
	} else {
		header('Location: home.php');
	}

	exit;
?>
