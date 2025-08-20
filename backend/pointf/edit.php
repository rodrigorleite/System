<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$razao_social = $_REQUEST['razao_social'];
$tipo = $_REQUEST['tipo'];
$cnpj_cpf = $_REQUEST['cnpj_cpf'];
$endereco = $_REQUEST['endereco'];
$telefone = $_REQUEST['telefone'];
$celular = $_REQUEST['celular'];
$email = $_REQUEST['email'];
$id_cidade_fk = $_REQUEST['id_cidade_fk'];

$sql = "UPDATE ponto_focal SET nome = '$nome', razao_social = '$razao_social', endereco = '$endereco', telefone = '$telefone', celular = '$celular', email = '$email', id_cidade_fk = '$id_cidade_fk' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Ponto Focal Atualizado!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/pointf.php')

    ?>