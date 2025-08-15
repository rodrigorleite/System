<?php

include '../conexao.php';

$id = $_REQUEST['Id'];
$nome = $_REQUEST['nome'];

$sql= "UPDATE regiao SET nome = '$nome' Where Id = '$Id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/region.php')

?>
