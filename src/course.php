<?php

include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';

$destino = "../backend/course/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM curso WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $curso = mysqli_fetch_assoc($dados);
    $destino = "../backend/course/edit.php";

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
                        <input readonly name="id" type="text" value="<?php echo isset($curso) ? $curso['id'] : "" ?>"
                            class="form-control" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text" value="<?php echo isset($curso) ? $curso['nome'] : "" ?>"
                            class="form-control" placeholder="Digite o nome do curso">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero</label>
                        <input name="numero" type="text" value="<?php echo isset($curso) ? $curso['numero'] : "" ?>"
                            class="form-control" placeholder="Digite o numero do curso">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Área</label>
                        <select name="id_area_fk" class="form-control">
                            <option value="">Selecione a área</option>
                            <?php
                            $sql_areas = "SELECT id, nome FROM area";
                            $result_areas = mysqli_query($conexao, $sql_areas);
                            while ($area = mysqli_fetch_assoc($result_areas)) {
                                $selected = isset($curso) && $curso['id_area_fk'] == $area['id'] ? 'selected' : '';
                                echo "<option value='{$area['id']}' $selected>{$area['nome']}</option>";
                            }
                            ?>
                        </select>
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
                            <th class="text-center" scope="col">Numero</th>
                            <th class="text-center" scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM curso";

                        $dados = mysqli_query($conexao, $sql);

                        while ($coluna = mysqli_fetch_assoc($dados)) {

                            ?>
                            <tr class="text-center">
                                <th class="text-center" scope="row"> <?php echo $coluna['id'] ?></th>
                                <td class="text-center"><?php echo $coluna['nome'] ?></td>
                                <td class="text-center"><?php echo $coluna['numero'] ?></td>
                                <td class="text-center">
                                    <a href="./course.php?id=<?= $coluna['id'] ?>"><i class="fa-solid fa-pencil me-4"
                                            style="color: #9c7aff;"></i></i></a>
                                    <a href="<?php echo "../backend/course/delete.php?id=" . $coluna['id'] ?>"
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