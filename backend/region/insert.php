<?php

include '../conexao.php';

$nome = $_REQUEST['nome'];

$sql = "INSERT INTO regiao(nome) VALUES ('$nome')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/region.php');

?>