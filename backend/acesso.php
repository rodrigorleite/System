<?php

include 'conexao.php';

// Receber o cpf e a senha por requisição

$cpf = $_REQUEST['cpf'];
$senha = $_REQUEST['senha'];

// 
$sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

// Executa sql
$resultado = mysqli_query($conexao, $sql);

// 
$coluna = mysqli_fetch_assoc($resultado);

echo $coluna['nome'];

if (mysqli_num_rows($resultado) > 0) {
   session_start(); //INICIAR SESSÃO

   $_SESSION['usuario'] = $coluna['nome'];
   $_SESSION['cpf'] = $coluna['cpf'];
   $_SESSION['senha'] = $coluna['senha'];

   header('location:../src/home.php');
} else {
   header('location:../index.php?erro=1');
}

?>