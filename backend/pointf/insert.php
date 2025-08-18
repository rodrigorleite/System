<?php

include '../conexao.php';

$nome = $_REQUEST['nome'];
$razao_social = $_REQUEST['razao_social'];
$tipo = $_REQUEST['tipo'];
$cnpj_cpf = $_REQUEST['cnpj_cpf'];
$endereco = $_REQUEST['endereco'];
$telefone = $_REQUEST['telefone'];
$celular = $_REQUEST['celular'];
$email = $_REQUEST['email'];
$id_cidade_fk = $_REQUEST['id_cidade_fk'];

$sql = "INSERT INTO ponto_focal(nome, razao_social, tipo, cnpj_cpf, endereco, telefone, celular, email, id_regiao_fk) VALUES ('$nome', '$razao_social', '$tipo', '$cnpj_cpf', '$endereco', '$telefone', '$celular', '$email', '$id_regiao_fk')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/pointf.php');

?>