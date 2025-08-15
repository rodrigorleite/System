<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

$sql= "UPDATE usuario SET nome = '$nome', email = '$email', cpf = '$cpf', senha = '$senha' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/home.php')

?>
