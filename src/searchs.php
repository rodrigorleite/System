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
                <?php include 'recursos/side-menu.php' ?>
            </div>

            <div class="col-3">

                <h2 class="text-center mt-2">Relatorio de Vendas de Áreas!</h2>

                <div class="mb-3">
                    <label class="form-label">Região</label>
                    <select name="id_regiao_fk" class="form-select">
                        <option value="">Selecione a região</option>
                        <?php
                        // Consulta para obter os nomes das regiões
                        $sql_regioes = "SELECT id, nome FROM regiao";
                        $result_regioes = mysqli_query($conexao, $sql_regioes);

                        // Verifica se há regiões retornadas
                        if ($result_regioes && mysqli_num_rows($result_regioes) > 0) {
                            // Itera sobre as regiões e cria as opções no select
                            while ($regiao = mysqli_fetch_assoc($result_regioes)) {
                                // Verifica se a região é a selecionada
                                $selected = (isset($curso) && $curso['id_regiao_fk'] == $regiao['id']) ? 'selected' : '';
                                echo "<option value='{$regiao['id']}' $selected>{$regiao['nome']}</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhuma região disponível</option>";
                        }
                        ?>
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Cidade</label>
                    <select name="id_cidade_fk" class="form-select">
                        <option value="">Selecione a cidade</option>
                        <?php
                        // Consulta para obter os nomes das cidades
                        $sql_cidades = "SELECT id, nome FROM cidade";
                        $result_cidades = mysqli_query($conexao, $sql_cidades);

                        // Verifica se há cidades retornadas
                        if ($result_cidades && mysqli_num_rows($result_cidades) > 0) {
                            // Itera sobre as cidades e cria as opções no select
                            while ($cidade = mysqli_fetch_assoc($result_cidades)) {
                                // Verifica se a cidade é a selecionada
                                $selected = (isset($curso) && $curso['id_cidade_fk'] == $cidade['id']) ? 'selected' : '';
                                echo "<option value='{$cidade['id']}' $selected>{$cidade['nome']}</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhuma cidade disponível</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ponto Focal</label>
                    <select name="id_ponto_focal_fk" class="form-select">
                        <option value="">Selecione o ponto focal</option>
                        <?php
                        // Consulta para obter os nomes dos pontos focais
                        $sql_pontos_focais = "SELECT id, nome FROM ponto_focal";
                        $result_pontos_focais = mysqli_query($conexao, $sql_pontos_focais);

                        // Verifica se há pontos focais retornados
                        if ($result_pontos_focais && mysqli_num_rows($result_pontos_focais) > 0) {
                            // Itera sobre os pontos focais e cria as opções no select
                            while ($ponto_focal = mysqli_fetch_assoc($result_pontos_focais)) {
                                // Verifica se o ponto focal é o selecionado
                                $selected = (isset($curso) && $curso['id_ponto_focal_fk'] == $ponto_focal['id']) ? 'selected' : '';
                                echo "<option value='{$ponto_focal['id']}' $selected>{$ponto_focal['nome']}</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhum ponto focal disponível</option>";
                        }
                        ?>
                    </select>
                </div>

            </div>

            <div class=" col-7 table-responsive mt-5">


                <?php
                $base_path = $_SERVER['DOCUMENT_ROOT'] . '/Projects/System/';
                include($base_path . 'src/graphic.html');
                ?>

                <!-- <div class="">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bar chart</h4>
                            <canvas id="barChart" style="height:230px"></canvas>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Doughnut chart</h4>
                                <canvas id="doughnutChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Grafico de Barras</h4>
                                <canvas id="pieChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->

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
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.5.0/chart.min.js"
            integrity="sha512-n/G+dROKbKL3GVngGWmWfwK0yPctjZQM752diVYnXZtD/48agpUKLIn0xDQL9ydZ91x6BiOmTIFwWjjFi2kEFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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