<?php

include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';

$destino = "../backend/pointf/insert.php";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM ponto_focal WHERE id = '$id' ";

    $dados = mysqli_query($conexao, $sql);
    $ponto_focal = mysqli_fetch_assoc($dados);
    $destino = "../backend/pointf/edit.php";

}
?>

<body>

    <?php include 'recursos/navbar.php' ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-2 menu">
                <?php include 'recursos/side-menu.php' ?>
            </div>

            <div class="col-2 mt-4">
                <h1>Cadastro</h1>

                <form action="<?= $destino ?>" method="post">

                    <div class="mb-3" style="display: none">
                        <label class="form-label">Id</label>
                        <input readonly name="id" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['id'] : "" ?>" class="form-control"
                            placeholder="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input name="nome" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['nome'] : "" ?>" class="form-control"
                            placeholder="Digite o nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Razão Social</label>
                        <input name="razao_social" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['razao_social'] : "" ?>"
                            class="form-control" placeholder="Digite a Razão Social">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <input name="tipo" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['tipo'] : "" ?>" class="form-control"
                            placeholder="Digite o tipo da Empresa">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CPF/CNPJ</label>
                        <input name="cnpj_cpf" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['cnpj_cpf'] : "" ?>"
                            class="form-control cnpj" placeholder="Digite o CNPJ">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço</label>
                        <input name="endereco" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['endereco'] : "" ?>"
                            class="form-control cnpj" placeholder="Digite o endereço">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input name="telefone" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['telefone'] : "" ?>"
                            class="form-control phone" placeholder="Digite o Telefone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Celular</label>
                        <input name="celular" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['celular'] : "" ?>"
                            class="form-control phone_with_ddd" placeholder="Digite o Celular">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['email'] : "" ?>" class="form-control"
                            placeholder="Digite o Endereço">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Id Cidade</label>
                        <input name="id_cidade_fk" type="text"
                            value="<?php echo isset($ponto_focal) ? $ponto_focal['id_cidade_fk'] : "" ?>"
                            class="form-control" placeholder="Digite o Endereço">
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>


            <div class="col-8 mt-4">
                <h1>Listagem</h1>

                <table id="tabela" class="table table-striped table-bordered">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Nome</th>
                            <th class="text-center" scope="col">Razão Social</th>
                            <th class="text-center" scope="col">Tipo</th>
                            <th class="text-center" scope="col">Cnpj/CPF</th>
                            <th class="text-center" scope="col">Endereço</th>
                            <th class="text-center" scope="col">Telefone</th>
                            <th class="text-center" scope="col">Celular</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM ponto_focal";

                        $dados = mysqli_query($conexao, $sql);

                        while ($coluna = mysqli_fetch_assoc($dados)) {

                            ?>
                            <tr class="text-center">
                                <th class="text-center" scope="row"> <?php echo $coluna['id'] ?></th>
                                <td class="text-center"><?php echo $coluna['nome'] ?></td>
                                <td class="text-center"><?php echo $coluna['razao_social'] ?></td>
                                <td class="text-center"><?php echo $coluna['tipo'] ?></td>
                                <td class="text-center"><?php echo $coluna['cnpj_cpf'] ?></td>
                                <td class="text-center"><?php echo $coluna['endereco'] ?></td>
                                <td class="text-center"><?php echo $coluna['telefone'] ?></td>
                                <td class="text-center"><?php echo $coluna['celular'] ?></td>
                                <td class="text-center"><?php echo $coluna['email'] ?></td>
                                <td class="text-center"><?php echo $coluna['id_cidade_fk'] ?></td>
                                <td class="text-center">
                                    <a href="./pointf.php?id=<?= $coluna['id'] ?>"><i class="fa-solid fa-pencil me-4"
                                            style="color: #9c7aff;"></i></i></a>
                                    <a href="<?php echo "../backend/pointf/delete.php?id=" . $coluna['id'] ?>"
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