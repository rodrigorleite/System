<?php

include 'recursos/style.php';

?>

<body>

  <div class="container mt-4">
    <h2> Venda de Áreas de Cursos </h2>
    <form action="../backend/venda/salvar_venda.php" method="post">
      <div class="row">
        <div class="col-md-4">
          <label> Região </label>
          <select class="form-select" name="regiao_id" id="regiao_id" required>
            <option>Selecione a Região </option>
            <?php
            include "../backend/conexao.php";
            $regioes = mysqli_query($conexao, "SELECT * FROM regiao ORDER BY nome");
            while ($reg = mysqli_fetch_assoc($regioes)) {
              echo "<option value='{$reg['Id']}'>{$reg['nome']}</option>";
            }
            ?>
          </select>
        </div>

        <div class="col-md-4">
          <label> Cidade </label>
          <select class="form-select" name="cidade_id" id="cidade_id" required>
            <option>Selecione</option>
          </select>
        </div>

        <div class="col-md-4">
          <label> Ponto Focal (Empresa)</label>
          <select class="form-select" name="ponto_focal_id" id="ponto_focal_id" required>
            <option value="">Selecione o Ponto Focal</option>
          </select>
        </div>

        <div class="col-md-4 mt-4">
          <label>Área de Curso</label>
          <select class="form-select" name="area_id" required>
            <option>Selecione a Área de Curso</option>
            <?php
            $areas = mysqli_query($conexao, "SELECT * FROM area ORDER BY nome");
            while ($a = mysqli_fetch_assoc($areas)) {
              echo "<option value='{$a['id']}'> {$a['nome']} </option>";
            }
            ?>
          </select>
        </div>

        <div class="col-md-4 mt-4">
          <label> Data da Compra </label>
          <input type="date" class="form-control" name="dtcompra" value="<?= date('Y-m-d') ?>">
        </div>

        <div class="col-md-4 mt-4">
          <label> Origem </label>
          <input type="text" class="form-control" name="origem">
        </div>

        <div class="col-md-12 mt-4">
          <label> Observação </label>
          <textarea class="form-control" rows="2" name="obs"></textarea>
        </div>

        <div class="mt-4 d-flex justify-content-start">
          <button type="submit" class="btn btn-success"> Salvar </button>
          <a href="home.php" class="btn btn-primary ms-1"> Voltar </a>
        </div>


      </div>
    </form>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    //se tiver alteração no campo região, dispara essa função
    $('#regiao_id').on('change', function () {
      //variável que guarda id da região selecionada
      var regiaoId = $(this).val();

      //vamos chamar o arquivo php que vai carregar as cidades de acordo com região
      $.post('../backend/venda/buscar_cidades.php', { regiao_id: regiaoId },
        function (data) { $('#cidade_id').html(data); });
    });

    $('#cidade_id').on('change', function () {
      var cidadeId = $(this).val();
      $.post('../backend/venda/buscar_pontos_focais.php', { cidade_id: cidadeId },
        function (data) { $('#ponto_focal_id').html(data); });
    });
  </script>

  <script src="../Js/Script.js"></script>
</body>

</html>