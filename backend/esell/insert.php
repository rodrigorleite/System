<?php

include '../conexao.php';

$data = $_REQUEST['data'];
$origem = $_REQUEST['origem'];
$obs = $_REQUEST['obs'];
$id_ponto_focal_fk = $_REQUEST['id_ponto_focal_fk'];
$id_area_fk = $_REQUEST['id_area_fk'];

$sql = "INSERT INTO vendas(data, origem, obs, id_ponto_focal_fk, id_area_fk) VALUES ( '$data', '$origem', '$obs', '$id_ponto_focal_fk', '$id_area_fk')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Venda efetuada com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/esell.php');

?>