<?php

include '../conexao.php';

$id = $_REQUEST['id'];

$sql =  "DELETE FROM venda WHERE id = '$id' ";
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "excluido com sucesso!";

header('Location:../../src/searchs.php');

?>
