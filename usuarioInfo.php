<!--usuarioInfo.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    <?php
        include_once "banco_dados.php";
        $id = $_GET['id'];
        $usuario = getUsuario($id);
    ?>
    <form method="post" action="atualizarUsuario.php">
        <fieldset class="container">
            <input name="id" type="hidden" value="<?php echo $usuario->getId(); ?>" />
            <legend>Info</legend>
            <label>Nome:</label>
            <input name="nome" type="text" value="<?php echo $usuario->getNome(); ?>"/>
            <label>Email:</label>
            <input name="email" type="email" value="<?php echo $usuario->getEmail(); ?>" />
            <label>Senha:</label>
            <input name="senha" type="password" placeholder="Senha" />
            <br />
            <div>
                <button><a href="home.php">Voltar</a></button>
                <input type="submit" value="Atualizar" />
                <button><a href="deletarUsuario.php?id=<?php echo $id; ?>">Deletar</a></button>
            </div>
        </fieldset>
    </form>
</body>
</html>
