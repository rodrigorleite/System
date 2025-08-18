<?php

include '../conexao.php';

$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];

$sql = "INSERT INTO area(nome, numero) VALUES ('$nome', '$numero')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/area.php');

?>