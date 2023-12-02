<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
//-----------------------conexão com o banco de dados------------------------------- //
$conexao = mysqli_connect("localhost", "root", "", "7ssoqueedaora");
//--------------------------------------------------------------------------------- //

//-----------------------checar se o cpf já existe------------------------------- //
$cpf = $_POST["cpf"];
$checar = "SELECT * FROM usuario WHERE cpf='$cpf'";

$numRowsRetorno = $retorno->num_rows;
//------------------------------------------------------------------------------ //

//-----------------------------realizar cadastro------------------------------- //
if($numRowsRetorno>0){
    
    echo '<script>alert("CPF já cadastrado!!!");</script>';
    print_r("<<<<<< Volte para a página anterior");
}
else{
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $insert = "INSERT INTO usuarios (email, cpf, senha) VALUES ('$email', '$cpf', '$senha')";
    $resultado = mysqli_query($conexao, $insert);
    header("location: login.php");
}a
//---------------------------------------------------------------------------- //
?>
</body>
</html>