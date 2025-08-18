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

                <form action="<?= $destino ?>" method="post">

                    <div class="mb-3" style="display: none">
                        <label class="form-label">Id</label>
                        <input readonly name="id" type="text" value="<?php echo isset($cidade) ? $cidade['id'] : "" ?>"
                            class="form-control" placeholder="">
                    </div>

                    <div class="mb-3">
                        <?php
                        if (isset($cidade)) {
                            $id_anterior = $cidade['id_regiao_fk'];
                            $sql_regiao_anterior = "SELECT Id, nome FROM regiao WHERE Id='$id_anterior' ";
                            $result = mysqli_query($conexao, $sql_regiao_anterior);
                            $regiao_anterior = mysqli_fetch_assoc($result);
                        } else {

                        }

                        ?>

                        <label class="form-label">Região</label>
                        <select name="id_regiao_fk" class="form-select">
                            <option value='<?php echo isset($cidade) ? $regiao_anterior['Id'] : "" ?>'>
                                <?php echo isset($cidade) ? $regiao_anterior['nome'] : "Selecione" ?> </option>;
                            <?php
                            // Consulta para obter os nomes das regiões
                            $sql_regioes = "SELECT Id, nome FROM regiao ";
                            $result_regioes = mysqli_query($conexao, $sql_regioes);

                            // Verifica se há regiões retornadas
                            if ($result_regioes && mysqli_num_rows($result_regioes) > 0) {
                                // Itera sobre as regiões e cria as opções no select
                                while ($regiao = mysqli_fetch_assoc($result_regioes)) {
                                    // Verifica se a região é a selecionada
                            
                                    echo "<option value='{$regiao['Id']}' $selected>{$regiao['nome']}</option>";
                                }
                            } else {
                                echo "<option value=''>Nenhuma região disponível</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text" value="<?php echo isset($cidade) ? $cidade['nome'] : "" ?>"
                            class="form-control" placeholder="Digite o nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <input name="estado" type="text" value="<?php echo isset($cidade) ? $cidade['estado'] : "" ?>"
                            class="form-control" placeholder="Digite o estado">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cep</label>
                        <input name="cep" type="text" value="<?php echo isset($cidade) ? $cidade['cep'] : "" ?>"
                            class="form-control cep" placeholder="Digite o cep">
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
                            <th class="text-center" scope="col">Estado</th>
                            <th class="text-center" scope="col">Cep</th>
                            <th class="text-center" scope="col">Id região</th>
                            <th class="text-center" scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM cidade";

                        $dados = mysqli_query($conexao, $sql);

                        while ($coluna = mysqli_fetch_assoc($dados)) {

                            ?>
                            <tr class="text-center">
                                <th class="text-center" scope="row"> <?php echo $coluna['id'] ?></th>
                                <td class="text-center"><?php echo $coluna['nome'] ?></td>
                                <td class="text-center"><?php echo $coluna['estado'] ?></td>
                                <td class="text-center"><?php echo $coluna['cep'] ?></td>
                                <td class="text-center"><?php echo $coluna['id_regiao_fk'] ?></td>
                                <td class="text-center">
                                    <a href="./city.php?id=<?= $coluna['id'] ?>"><i class="fa-solid fa-pencil me-4"
                                            style="color: #9c7aff;"></i></i></a>
                                    <a href="<?php echo "../backend/city/delete.php?id=" . $coluna['id'] ?>"
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