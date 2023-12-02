<?php

$conexao = mysqli_connect("localhost", "root", "", "7ssoqueedaora");

if(!isset($_SESSION["cpf"])){
    session_start();
  
};

if(isset($_POST['email']) and isset($_POST['senha'])) {

$email = $_POST["email"];
$senha = $_POST["senha"];


$usuariobusca = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
$usuarioquery = mysqli_query ($conexao, $usuariobusca);
$usuarioqueryrow = $usuarioquery->num_rows; 

if($usuarioqueryrow === 1){

    
    $id = mysqli_fetch_assoc($usuarioquery);
    $_SESSION["email"] =  $id["email"];
    header("location: home.php");
   
} else{

echo "email ou senha inválidos";

}




}







?>