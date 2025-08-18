<?php

include '../conexao.php';

$nome = $_REQUEST['nome'];
$estado = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];
$id_regiao_fk = $_REQUEST['id_regiao_fk'];

$sql = "INSERT INTO cidade(nome, cep, estado, id_regiao_fk) VALUES ('$nome', '$cep', '$estado', '$id_regiao_fk')";

$resultado = mysqli_query($conexao, $sql);


session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/city.php');

?>