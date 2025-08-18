<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$data = $_REQUEST['data'];
$origem = $_REQUEST['origem'];
$obs = $_REQUEST['obs'];
$id_ponto_focal_fk = $_REQUEST['id_ponto_focal_fk'];
$id_area_fk	= $_REQUEST['id_area_fk'];

$sql= "UPDATE venda SET id = '$id', data = '$data', origem = '$origem', obs	 = '$obs', id_ponto_focal_fk = '$id_ponto_focal_fk', id_area_fk	= '$id_area_fk' Where id = '$id' ";

session_start();
$_SESSION['mensagem'] = "Usuario editado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

mysqli_query($conexao, $sql);
header('Location:../../src/searchs.php')

?>
