<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2929;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
        }

        .container {
            width: 300px;
            padding: 20px;
            background-color: #2c2929;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="email"],
        input[type="password"] {
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

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #aaa;
        }

        button {
            background-color: #c68642;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            background-image: url('gatrocula.png');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .page-title {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        .page-title img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="page-title">
        <img src="gatrocula.jpg" alt="Gatrocula">
        <h1>Página de Login</h1>
    </div>
    <div class="container">
        <?php
            session_start();
            if($_SESSION != null){
                if($_SESSION['usuarioAtual'] != null){
                    header('Location: home.php');
                    exit();
                }
            }
        ?>
        <form action="verifica_login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br>
            <div>
                <button><a href="registro.php?c=false">Cadastrar</a></button>
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
</body>
</html>
