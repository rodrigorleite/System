<?php

include '../backend/conexao.php';
include '../backend/validacao.php';

$destino = "../backend/user/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $usuarios = mysqli_fetch_assoc($dados);
    $destino = "../backend/user/edit.php";

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../Styles/Style.css">

</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col-2 menu">
                <ul class="menu">
                    <p class="mt-4 " style="color:white;">
                        Bem vindo(a) <?php
                        echo $_SESSION["usuario"]; ?>
                    </p>
                    <li class="mt-2">
                        <a href="home.php" class="menu-item"><i class="fa-solid fa-user"></i> Usuario</a>
                    </li>
                    <li class="mt-2">
                        <a href="region.php" class="menu-item"><i class="fa-solid fa-globe"></i> Regiões</a>
                    </li>
                    <li class="mt-2">
                        <a href="city.php" class="menu-item"><i class="fa-solid fa-city"></i> Cidades</a>
                    </li>
                    <li class="mt-2">
                        <a href="pointf.php" class="menu-item"><i class="fa-solid fa-crosshairs"></i> Pontos Focais</a>
                    </li>
                    <li class="mt-2">
                        <a href="area.php" class="menu-item"><i class="fa-solid fa-graduation-cap"></i> Áreas</a>
                    </li>
                    <li class="mt-2">
                        <a href="esell.php" class="menu-item"><i class="fa-solid fa-money-bill-trend-up"></i> Efetuar
                            Venda</a>
                    </li>
                    <li class="mt-2">
                        <a href="searchs.php" class="menu-item"><i class="fa-solid fa-magnifying-glass"></i> Pesquisar
                            Vendas</a>
                    </li>
                </ul>
            </div>

            <div class="col-3">

                <h2 class="text-center mt-2">Relatorio de Vendas de Áreas!</h2>

                <div class="col-md-">
                    <label for="">Região</label>
                    <select class="form-select">
                        <option value="">Noroeste</option>
                        <option value="">Sul</option>
                    </select>
                </div>

                <div class="col-md-">
                    <label for="">Cidade</label>
                    <select class="form-select">
                        <option value="">Nova Londrina</option>
                        <option value="">Sitio de Nova londrina</option>
                    </select>
                </div>

                <div class="col-md-">
                    <label for="">Ponto Focal</label>
                    <select class="form-select">
                        <option value="">Nova Londrina</option>
                        <option value="">Sitio de Nova londrina</option>
                    </select>

                </div>
                <div class="col-md-">
                    <label for="">Área de curso</label>
                    <select class="form-select">
                        <option value="">Tecnologi</option>
                        <option value="">Gastromia</option>
                        <option value="">Garoto de Programa</option>
                    </select>
                </div>
            </div>

            <div class=" col-7 table-responsive mt-5">
                <table id="tabela" class="table table-bordered table-striped">

                    <thead class="table-info">
                        <tr>
                            <th class="text-center" scope="col">Região</th>
                            <th class="text-center" scope="col">Cidade</th>
                            <th class="text-center" scope="col">Ponto Focal</th>
                            <th class="text-center" scope="col">Tipo</th>
                            <th class="text-center" scope="col">Área de curso</th>
                            <th class="text-center" scope="col">Data da Compra</th>
                            <th class="text-center" scope="col">Origem</th>
                            <th class="text-center" scope="col">Obs</th>
                            <th class="text-center" scope="col">Excluir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM usuario";

                        $dados = mysqli_query($conexao, $sql);

                        while ($coluna = mysqli_fetch_assoc($dados)) {

                            ?>
                            <tr class="text-center">
                                <th class="text-center" scope="row"> <?php echo $coluna['id'] ?></th>
                                <td class="text-center"><?php echo $coluna['nome'] ?></td>
                                <td class="text-center"><?php echo $coluna['email'] ?></td>
                                <td class="text-center"><?php echo $coluna['cpf'] ?></td>
                                <td class="text-center"><?php echo $coluna['senha'] ?></td>
                                <td class="text-center">
                                    <a href="./home.php?id=<?= $coluna['id'] ?>"><i class="fa-solid fa-pencil me-4"
                                            style="color: #9c7aff;"></i></i></a>
                                    <a href="<?php echo "../backend/user/delete.php?id=" . $coluna['id'] ?>"
                                        onclick="return confirm('Deseja realmente excluir!')"><i
                                            class="fa-solid fa-trash-can" style="color: #ff0000;"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                    <!-- <body>
                        <tr>
                            <td>Noroeste</td>
                            <td>Nova Londrina</td>
                            <td>Noroeste</td>
                            <td>Cep</td>
                            <td>Tecnologi</td>
                            <td>12/08/2009</td>
                            <td>Arrasta pra cima</td>
                            <td>pago adiantado</td>
                            <td> <a href="#" class="text-danger"
                                    onclick="return confirm('Vai querer exlui memo fiote?')">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a></td>
                        </tr>
                    </body>
                    </thead> -->
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../Js/Script.js"></script>

</body>