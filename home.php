<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2929;
            color: #fff;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #2c2929;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 20px auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            background-color: #2c2929;
            border-bottom: 1px solid #fff;
            color: #fff;
            box-sizing: border-box;
            border-radius: 5px;
            text-align: center;
        }

        input[type="text"]::placeholder {
            color: #aaa;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
            font-weight: bold;
        }

        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }

        legend {
            color: #fff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            color: #fff;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #fff;
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #555;
        }

        tr:hover {
            background-color: #777;
        }

        button {
            background-color: #c68642;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .logo h1 {
            margin: 0;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="gatrocula.jpg" alt="Gatrocula">
        <h1>Lista de usuários</h1>
    </div>
    <div class="container">
        <?php 
         include_once "banco_dados.php";
         include_once "usuario.php";
         $getUsuarios = pesquisaUsuarios("");
         session_start();
         $usuarioAtual = $_SESSION['usuarioAtual'];
        ?>
        <input type="text" placeholder="Pesquisa">
        <label>Usuário: <?php echo $usuarioAtual->getNome(); ?></label>
        <fieldset>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Editar</th>
                </tr>
                <?php foreach($getUsuarios as $usuario){ ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><button><a href="usuarioInfo.php?id=<?php echo $usuario['id']; ?>">Editar</a></button></td>
                </tr>
                <?php } ?>
            </table>
            <div>
                <button><a href="logoff.php">Deslogar</a></button>
                <button><a href="registro.php?c=true">Cadastrar</a></button>
            </div>
        </fieldset>
    </div>
</body>
</html>
