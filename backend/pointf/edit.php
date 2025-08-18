<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$estado = $_REQUEST['estado'];
$cep = $_REQUEST['cep'];
$id_regiao_fk = $_REQUEST['id_regiao_fk'];

$sql= "UPDATE cidade SET nome = '$nome', estado = '$estado', cep = '$cep', id_regiao_fk = '$id_regiao_fk' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/city.php')

?>
