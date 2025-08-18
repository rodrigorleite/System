<?php

include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';

$destino = "../backend/searchs/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM venda WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $venda = mysqli_fetch_assoc($dados);
    $destino = "../backend/searchs/edit.php";

}
?>


<body>

    <?php include 'recursos/navbar.php' ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-2 menu">
                <<?php include 'recursos/side-menu.php' ?>
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
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Data</th>
                            <th class="text-center" scope="col">Origem</th>
                            <th class="text-center" scope="col">Obs</th>
                            <th class="text-center" scope="col">Id Ponto Focal</th>
                            <th class="text-center" scope="col">Id Area</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM venda";

                        $dados = mysqli_query($conexao, $sql);

                        while ($coluna = mysqli_fetch_assoc($dados)) {

                            ?>
                            <tr class="text-center">
                                <th class="text-center" scope="row"> <?php echo $coluna['id'] ?></th>
                                <td class="text-center"><?php echo $coluna['data'] ?></td>
                                <td class="text-center"><?php echo $coluna['origem'] ?></td>
                                <td class="text-center"><?php echo $coluna['obs'] ?></td>
                                <td class="text-center"><?php echo $coluna['id_ponto_focal_fk'] ?></td>
                                <td class="text-center"><?php echo $coluna['id_area_fk'] ?></td>
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