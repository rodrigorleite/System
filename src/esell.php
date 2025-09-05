<?php

include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';

$destino = "../backend/venda/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM venda WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $venda = mysqli_fetch_assoc($dados);
    $destino = "../backend/esell/edit.php";

}
?>

<body>

    <?php include 'recursos/navbar.php' ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-7 mt-5">
                <h2>Venda de Áreas</h2>
                <form class="row">
                    <div class="col md-4">
                        <label> Região </label>
                        <select name="regiao" class="form-select" required>
                            <option> Selecione a Região</option>
                            <?php
                            $sql = "SELECT * FROM regiao ORDER BY nome";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($reg = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='{$reg['id']}' >{$reg['nome']}</option>";
                            }
                            ?>
                        </select>

                    </div>

                    <div class="col md-4">
                        <label>Cidade</label>
                        <select name="cidade" class="form-select" required>
                            <option> Selecione a Cidade</option>
                            <?php
                            $sql = "SELECT * FROM cidade ORDER BY nome";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($reg = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='{$reg['id']}' >{$reg['nome']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col md-4">
                        <label>Empresa</label>
                        <select name="ponto_focal" class="form-select" required>
                            <option> Selecione a Região</option>
                            <?php
                            $sql = "SELECT * FROM ponto_focal ORDER BY nome";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($reg = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='{$reg['id']}' >{$reg['nome']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col md-4">
                        <label>área do curso</label>
                        <select name="area" class="form-select" required>
                            <option> Selecione a Região</option>
                            <?php
                            $sql = "SELECT * FROM area ORDER BY nome";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($reg = mysqli_fetch_assoc($resultado)) {
                                echo "<option value='{$reg['id']}' >{$reg['nome']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col md-4">
                        <label>Data da compra</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-12 mt-4">
                        <label>Observação</label>   
                        <textarea name="area" class="form-control" rows="1"></textarea>
                    </div>

                    <div class="col md12 mt-4 justify-content-end">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="home.php" class="btn btn-primary ms-1">Voltar</a>
                    </div>
                </form>
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

    <script src="recursos/particles.js"></script>
    <script src="../Js/Script.js"></script>

</body>