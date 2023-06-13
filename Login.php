<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faça seu login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #000000;
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
    .form-group input[type="password"] {
      width: 100%;
      padding: 5px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }
    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: none;
      background-color: #000000;
      color: #fff;
      cursor: pointer;
    }
    .avatar {
      width: 80px;
      height: 80px;
      margin: 0 auto 20px;
      border-radius: 50%;
      overflow: hidden;
    }
    .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Faça seu login</h2>
    <form action="verifica_login.php" method="post">
      <div class="form-group">
        <div class="avatar">
          <img src="icon.jpg" alt="Avatar">
        </div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Entrar" onclick="redirectToPage()">
      </div>
    </form>
  </div>

  <script>
    function redirectToPage() {
      window.location.href = "Lista.php";
    }
  </script>
</body>
</html>
