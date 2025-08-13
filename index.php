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
    <link rel="stylesheet" href="Styles/Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

</head>

<body class="fundologin">
    <div class="painel animate__animated animate__pulse">
        <div class="cabecalho">
            <i class="fa-solid fa-circle-user"></i>
            <h3>Login</h3>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <?php

        if (isset($_GET['erro']) && $_GET['erro'] == 1) {
            echo "<script>
            var notyf = new Notyf({
                duration: 3000,
                    position: {
                    x: 'center',
                    y: 'top',
                },
            
        });
            notyf.error('login ou senha invalidos');
            </script>";
            unset($_SESSION['mensagem']);
        }
        ?>
        <form class="dados" action="./backend/acesso.php" method="post">
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input name="cpf" type="text" class="form-control cpf" placeholder="Digite seu CPF">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <div class="input-group">
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                    <button class="btn btn-outline-secondary" type="button" id="toggleSenha">
                        <i class="fa fa-eye" id="iconeOlho"></i>
                    </button>
                </div>
                <div>
                    <button href="" type="submit"
                        class="btn btn-primary mt-4 ms-1 justify-content-center">Entrar</button>
                </div>
            </div>
        </form>
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

    <script src="Js/Script.js"></script>

</body>