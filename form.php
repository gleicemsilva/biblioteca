<?php

if(isset($_POST['submit']))
{
    include_once('config.php');//chamar a conexao
    
    
    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    // Verificar se o id já existe no banco de dados
    $query = mysqli_query($conexao, "SELECT * FROM users WHERE id = '$id'");
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        // Id já existe, exibir alerta
        echo "<script>alert('CPF já existe. Por favor, escolha outro CPF.');</script>";
    } else {
        // Id não existe, realizar a inserção no banco de dados
        $result = mysqli_query($conexao, "INSERT INTO users(id,email,senha) VALUES ('$id','$email','$senha')");
        header('Location:cadastrado.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(45deg, #4e54c8, #8f94fb);
    color: #333;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    color: #007bff;
  }

  form {
    margin-top: 20px;
  }

  fieldset {
    border: 2px solid #007bff;
    border-radius: 10px;
    padding: 20px;
  }

  legend {
    color: #007bff;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="password"],
  input[type="email"],
  input[type="number"],
  input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
  </style>
</head>

<body>
  <a href="home.php">Voltar</a>
  <div class="container">
    <h1>Fórmulario de Cadastro</h1>
    <form action="form.php" method="POST">
      <fieldset>
        <legend>Dados</legend>


        <label for="id">CPF:</label>
        <input type="number" name="id" id="id" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>



        <input type="submit" name="submit" value="Cadastrar">
      </fieldset>
    </form>
  </div>
</body>

</html>