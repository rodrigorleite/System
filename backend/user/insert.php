<?php 

include '../conexao.php';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO usuario(nome, email, cpf, senha) VALUES ('$nome', '$email', '$cpf', '$senha')";

$resultado = mysqli_query($conexao, $sql);

header('Location:../../src/home.php');

?>