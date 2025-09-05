<?php
include '../backend/conexao.php';
include '../backend/validacao.php';
include 'recursos/style.php';
$sql = "SELECT *,
  v.id,
  v.data_venda,
  pf.nome AS ponto_focal_nome,
  pf.tipo,
  a.nome AS area_nome,
  c.nome AS cidade_nome,
  r.nome AS regiao_nome
  FROM venda v INNER JOIN ponto_focal pf 
  ON pf.id = v.id_ponto_focal_fk
  INNER JOIN area a 
  ON a.id = v.id_area_fk
  INNER JOIN cidade c
  ON pf.id_cidade_fk = c.id
  INNER JOIN regiao r
  ON c.id_regiao_fk = r.id
  ORDER BY v.data_venda DESC
  ";

$resultado = mysqli_query($conexao, $sql);
$teste = mysqli_fetch_assoc($resultado);
?>

<body class="container-fluid">

    <h2> Relatorio de Vendas</h2>
    <div class="row">

        <div class="col-md-2 mt-2">
            <label> Região </label>
            <select class="form-select">
            </select>
        </div>

        <div class="col-md-2 mt-2">
            <label> Cidade</label>
            <select class="form-select">
                <option> Nova Londrina </option>
                <option> Marilena </option>
            </select>
        </div>

        <div class="col-md-2 mt-2">
            <label> Ponto Focal</label>
            <select class="form-select">
                <option> Prefeitura </option>
                <option> FecLopes </option>
            </select>
        </div>

        <div class="col-md-2 mt-2">
            <label> Area de Curso </label>
            <select class="form-select">
                <option> Tecnologia </option>
                <option> Gastronomia </option>
            </select>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered" id="tabela">
                <thead>
                    <tr>
                        <th class="text-center"> Região </th>
                        <th class="text-center"> Cidade </th>
                        <th class="text-center"> Ponto Focal </th>
                        <th class="text-center"> Tipo </th>
                        <th class="text-center"> Area do Curso </th>
                        <th class="text-center"> Data da Compra</th>
                        <th class="text-center"> Origem </th>
                        <th class="text-center"> Obsevação </th>
                        <th class="text-center"> Excluir </th>
                    </tr>
                <tbody>
                    <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td class="text-center"><?= $linha['regiao_nome'] ?></td>
                            <td class="text-center"><?= $linha['cidade_nome'] ?></td>
                            <td class="text-center"><?= $linha['ponto_focal_nome'] ?></td>
                            <td class="text-center"><?= $linha['tipo'] ?></td>
                            <td class="text-center"><?= $linha['area_nome'] ?></td>
                            <td class="text-center"><?= $linha['data_venda'] ?></td>
                            <td class="text-center"><?= $linha['origem'] ?></td>
                            <td class="text-center"><?= $linha['obs'] ?></td>
                            <td class="text-center">
                                <a href="#" class="text-danger"
                                    onclick="return confirm ('Tem certeza que deseja excluir?')">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

                </thead>
            </table>
        </div>

    </div>

    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

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