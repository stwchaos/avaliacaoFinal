<?php
include_once "bancoweb.php";
include_once "usuario.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($nome == null || $email == null || $senha == null || verificarCadastro($email) != null) {
    if ($_POST['c'] == 'true') {
        header("Location: cadastro.php?c=true");
    } else {
        header("Location: cadastro.php?c=false");
    }
} else {
    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    $usuario->setId(inserirUsuario($usuario->getNome(), $usuario->getEmail(), $usuario->getSenha()));

    if ($_POST['c'] != 'true') {
        session_start();
        $_SESSION['usuarioAtual'] = $usuario;
    }
    header('Location: lista.php');
}
?>
