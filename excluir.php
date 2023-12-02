<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: exibir.php");
        exit();
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }
}
?>
