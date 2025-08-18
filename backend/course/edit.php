<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];
$id_area_fk = $_REQUEST['id_area_fk'];

$sql= "UPDATE curso SET nome = '$nome', numero = '$numero', id_area_fk = '$id_area_fk' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/course.php')

?>
