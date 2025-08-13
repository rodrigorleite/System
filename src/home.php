<?php

include '../backend/conexao.php';
include '../backend/validacao.php';

$destino = "../backend/user/insert.php";

if (!empty($_GET['ID'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuario WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $usuarios = mysqli_fetch_assoc($dados);
    $$destino = "../backend/user/insert.php";

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <title>Sistema</title>
</head>

<body>

    <?php if (isset($_SESSION['mensagem'])) {
        echo "<script> var notyf = new Notyf({ duration: 3000, 
        position: { x: 'center', y: 'top', }, });
         notyf.success(' " . $_SESSION['mensagem'] . " '); 
         </script>";
        unset($_SESSION['mensagem']);
    } ?>


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"> <i class="fa-solid fa-book"></i> É isso ai!</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="#">Action</a></li>
                            <li><a class="dropdown-item text-center" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-center" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 text-center" type="search" placeholder="Buscar"
                        aria-label="Search" />
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <a class="btn ms-1" href="../backend/logout.php"><i class="fa-solid fa-door-open"></i></a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row">

            <div class="col-2 menu">
                <ul class="menu">
                    <p class="mt-4 " style="color:white;">
                        Bem vindo(a) <?php
                        echo $_SESSION["usuario"]; ?>
                    </p>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-user"></i> Usuario</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-globe"></i> Regiões</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-city"></i> Cidades</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-crosshairs"></i> Pontos Focais</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-graduation-cap"></i> Áreas</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-money-bill-trend-up"></i> Efetuar Venda</a>
                    </li>
                    <li>
                        <a href="" class="menu-item"><i class="fa-solid fa-magnifying-glass"></i> Pesquisar Vendas</a>
                    </li>
                </ul>
            </div>

            <div class="col-3 mt-4">
                <h1>Cadastro</h1>

                <form action="../backend/user/insert.php">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text" class="form-control" placeholder="Digite seu Nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" placeholder="Digite seu E-mail">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CPF</label>
                        <input name="cpf" type="text" class="form-control cpf" placeholder="Digite seu CPF">
                    </div>

                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <div class="input-group">
                            <input name="senha" type="password" class="form-control" id="senha"
                                placeholder="Digite sua senha" autocomplete="new-password">
                            <button class="btn btn-outline-secondary ms-1" type="button" id="toggleSenha">
                                <i class="fa fa-eye" id="iconeOlho"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>

            <div class="col-7 mt-4">
                <h1>Listagem</h1>

                <table id="tabela" class="table table-striped table-bordered">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Nome</th>
                            <th class="text-center" scope="col">E-Mail</th>
                            <th class="text-center" scope="col">CPF</th>
                            <th class="text-center" scope="col">Senha</th>
                            <th class="text-center" scope="col">Opções</th>
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
                </table>
            </div>


        </div>

    </div>

    <!-- Codigo Js -->

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

</html>