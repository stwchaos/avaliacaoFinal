<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edição de Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #020202;
    }
    .container {
      max-width: 400px;
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
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input[type="text"],
    .form-group input[type="email"] {
      width: 100%;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    .form-group input[type="submit"],
    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: none;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
      margin-bottom: 10px; /* Espaçamento entre os botões */
    }
    .form-group button {
      background-color: #f44336;
    }
    .profile-image {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    .profile-image img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edição de Cadastro</h2>
    <div class="profile-image">
      <img src="icon.jpg" alt="Foto do Perfil">
    </div>
    <?php
      include_once "banco_dados.php"; 
      $id = $_GET['id'];
      $usuario = getUsuario($id);
    ?>
    <form method="post" action="atualizarUsuario.php">
      <input name="id" type="hidden" value="<?php echo $usuario['id']; ?>" />
      <fieldset class="container">
        <legend>Info</legend>
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>">
        </div>
        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Senha">
        </div>
        <br>
        <div class="form-group">
          <button><a href="home.php">Voltar</a></button>
          <input type="submit" value="Atualizar">
          <button><a href="deletarUsuario.php?id=<?php echo $id; ?>">Deletar</a></button>
        </div>
      </fieldset>
    </form>
  </div>
</body>
</html>
