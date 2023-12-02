<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row["email"];
        $senha = $row["senha"];
    } else {
        echo "Usuário não encontrado";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $senha =($_POST["senha"]); // Hash da senha

    $sql = "UPDATE usuarios SET email='$email', senha='$senha' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: exibir.php");
        exit();
    } else {
        echo "Erro ao atualizar usuário: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="editar.css">
</head>
<body>

<header>
        <h1>EDITAR USUÁRIO</h1>
    </header>

    <div class="edit-user"> 
        <h2></h2>
        <form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            E-mail: <input type="email" name="email" value="<?php echo $email; ?>" required>
            Senha: <input type="password" name="senha" value="<?php echo $senha; ?>" required>
            <br>
            <input type="submit" value="Salvar Alterações">
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
