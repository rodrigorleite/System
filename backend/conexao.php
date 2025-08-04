<?php 

$endereco = 'localhost';
$nome = 'brics';
$usuario = 'root';
$senha = '';

$conexao=mysqli_connect($endereco, $usuario, $senha, $nome);

// Se der erro
if(!$conexao){
    die('Erro na conexão com o banco'.mysqli_connect_error());
}
?>