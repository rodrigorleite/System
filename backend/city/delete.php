<?php

include '../conexao.php';

$id = $_REQUEST['id'];

$sql =  "DELETE FROM cidade WHERE id = '$id' ";
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "excluido com sucesso!";

header('Location:../../src/city.php');

?>
