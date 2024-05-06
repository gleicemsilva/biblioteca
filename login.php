<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <style>
  body {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(45deg, #4e54c8, #8f94fb);
    /* Animação para mudar a cor de fundo */
  }

  .container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
    color: #333333;
  }

  input[type="text"],
  input[type="password"] {
    padding: 15px;
    border: 1px solid #dddddd;
    outline: none;
    font-size: 15px;
    margin-bottom: 20px;
    width: calc(100% - 30px);
    box-sizing: border-box;
    border-radius: 5px;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #6c5ce7;
  }

  .inputSubmit {
    background-color: #6c5ce7;
    border: none;
    padding: 15px;
    width: calc(100% - 30px);
    border-radius: 5px;
    color: #ffffff;
    font-size: 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .inputSubmit:hover {
    background-color: #4834d4;
  }

  a {
    color: #6c5ce7;
    text-decoration: none;
    font-size: 14px;
    display: block;
    margin-top: 20px;
    transition: color 0.3s ease;
  }

  a:hover {
    color: #4834d4;
  }

  h1 {
    margin-bottom: 30px;
    color: #6c5ce7;
  }

  @keyframes changeColor {
    0% {
      background-color: #f8f8ff;
    }

    25% {
      background-color: #fdebd0;
    }

    50% {
      background-color: #f9e79f;
    }

    75% {
      background-color: #f5cba7;
    }

    100% {
      background-color: #f1948a;
    }
  }
  </style>
</head>

<body>
  <div class="container">
    <h1>Login</h1>
    <form action="teste.php" method="POST">
      <input type="text" name="email" placeholder="Email">
      <br><br>
      <input type="password" name="senha" placeholder="Senha">
      <br><br>
      <input class="inputSubmit" type="submit" name="submit" value="Entrar">
    </form>
    <a href="home.php">Voltar</a>
  </div>
</body>

</html>