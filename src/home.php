<?php

include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';

$destino = "../backend/city/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $cidade = mysqli_fetch_assoc($dados);
    $destino = "../backend/city/edit.php";

}
?>

<body>
    <?php include 'recursos/navbar.php' ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-2 menu">
                <?php include 'recursos/side-menu.php' ?>
            </div>

            <div class="col-3 mt-4">
                <h1>Cadastro</h1>


            </div>


            <div class="col-7 mt-4">
                <h1>Listagem</h1>

            </div>
        </div>

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