<?php

include '../conexao.php';

$nome = $_REQUEST['nome'];
$numero = $_REQUEST['numero'];
$id_area_fk = $_REQUEST['id_area_fk'];

$sql = "INSERT INTO curso(nome, numero, id_area_fk) VALUES ('$nome', '$numero', '$id_area_fk')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/course.php');

?>