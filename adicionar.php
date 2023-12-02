<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = ($_POST["senha"]); // Hash da senha

    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: exibir.php");
        exit();
    } else {
        echo "Erro ao adicionar usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="adicionar.css">
</head>
<body>

<header>
        <h1>CRUD</h1>
    </header>


    <div class="add-user">
      <h2>Adicionar Usuário</h2>
      <form action="adicionar.php" method="post">
          E-mail: <input type="email" name="email" required>
          Senha: <input type="password" name="senha" required>
          <br> 
          <input type="submit" value="Adicionar">
      </form>
    </div>

    <!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
              
            </div>
            <div class="footer-info">
                <h3>Contato</h3>
                <p>Email: contato@seusite.com</p>
                <p>Telefone: (123) 456-7890</p>
            </div>
            <div class="footer-social">
                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
