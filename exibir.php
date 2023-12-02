<?php
include 'conexao.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="exibir.css">
</head>
<body>

<header>
        <h1>O que é a Depressão</h1>
    </header>


    <div class="user-list">
      <h2>Lista de Usuários</h2>
      <a href="adicionar.php">Adicionar Novo Usuário</a>
      <br>
      <table border="1">
          <tr>
              <th>ID</th>
              <th>E-mail</th>
              <th>Senha</th>
              <th>Ações</th>
          </tr>
          <?php
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['email']}</td>
                          <td>{$row['senha']}</td>
                          <td>
                              <a href='editar.php?id={$row['id']}'>Editar</a>
                              <a href='excluir.php?id={$row['id']}' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>Excluir</a>
                          </td>
                        </tr>";
              }
          } else {
              echo "<tr><td colspan='4'>Nenhum usuário encontrado</td></tr>";
          }
          $conn->close();
          ?>
      </table>
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
