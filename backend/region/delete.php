<?php

include '../conexao.php';

$id = $_REQUEST['Id'];

$sql =  "DELETE FROM regiao WHERE Id = '$id' ";
$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "excluido com sucesso!";

header('Location:../../src/region.php');

?>
