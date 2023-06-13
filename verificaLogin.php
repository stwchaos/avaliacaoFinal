<!--verificaLogin.php-->

<?php
    include_once "banco_dados.php";
    include_once "usuario.php";

    $u = logar($_POST['email'], $_POST['senha']);
    if($u == null){
        header('Location: index.php');
    } else {
        $usuario = new Usuario();
        $usuario->setNome($u->getNome());
        $usuario->setEmail($u->getEmail());
        $usuario->setSenha($u->getSenha()); 
        $usuario->setId($u->getId());
        session_start();
        $_SESSION['usuarioAtual'] = $usuario;
        header('Location: home.php');
    }
?>
