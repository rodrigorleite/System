<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];

$sql= "UPDATE area SET nome = '$nome', numero = '$numero' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/area.php')

?>
