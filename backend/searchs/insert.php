<?php

include '../conexao.php';

$id = $_REQUEST['id'];
$data = $_REQUEST['data'];
$origem = $_REQUEST['origem'];
$obs = $_REQUEST['obs'];
$id_ponto_focal_fk = $_REQUEST['id_ponto_focal_fk'];
$id_area_fk = $_REQUEST['id_area_fk'];

$sql = "INSERT INTO cidade(id, data, origem, obs, id_ponto_focal_fk, id_area_fk ) VALUES ('$id', '$data', '$origem', '$id_ponto_focal_fk', '$id_area_fk')";

$resultado = mysqli_query($conexao, $sql);

session_start();
$_SESSION['mensagem'] = "Usuario cadastrado com sucesso!";
// $_SESSION['tipo'] = "success, error, info, warning";

header('Location:../../src/serchs.php');

?>