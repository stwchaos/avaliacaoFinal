<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listagem de Cadastros de Pessoas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000000;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
    }
    .search-form {
      margin-bottom: 20px;
    }
    .search-form input[type="text"] {
      width: 300px;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    .search-form input[type="submit"] {
      padding: 5px 10px;
      font-size: 16px;
      border: none;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    .person-list {
      list-style-type: none;
      padding: 0;
    }
    .person-list li {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      background-color: #f9f9f9;
    }
    .person-list li h3 {
      margin-top: 0;
    }
    .person-list li p {
      margin-bottom: 0;
    }
    .person-list li .actions {
      margin-top: 10px;
    }
    .person-list li .actions a {
      margin-right: 10px;
      color: #4caf50;
      text-decoration: none;
    }
    .person-list li .actions a.edit {
      color: #ff9800;
    }
    .person-list li .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 10px;
      display: inline-block;
    }
    .person-list li .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Listagem de Cadastros de Pessoas</h2>
    <div class="search-form">
      <form method="get" action="pesquisar_pessoas.php">
        <input type="text" name="query" placeholder="Pesquisar">
        <input type="submit" value="Buscar">
      </form>
    </div>
    <ul class="person-list">
      <?php
        include_once "banco_dados.php";
        include_once "usuario.php";
        $getUsuarios = pesquisaUsuarios("");
        session_start();
        $usuarioAtual = $_SESSION['usuarioAtual'];
        foreach ($getUsuarios as $usuario) {
      ?>
      <li>
        <div class="avatar">
          <img src="gatrocula.jpg" alt="Avatar">
        </div>
        <h3><?php echo $usuario['nome']; ?></h3>
        <p>Idade: <?php echo $usuario['idade']; ?></p>
        <p>E-mail: <?php echo $usuario['email']; ?></p>
        <div class="actions">
          <a href="visualizar_pessoa.php?id=<?php echo $usuario['id']; ?>">Visualizar</a>
          <a href="editar_pessoa.php?id=<?php echo $usuario['id']; ?>" class="edit">Editar</a>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
</body>
</html>
