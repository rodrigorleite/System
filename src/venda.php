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
    <link rel="stylesheet" href="recursos/particle.css">
    <link rel="stylesheet" href="../Styles/Style.css">

</head>

<body class="container">

    <div class="">
        <h2>Venda de Áreas</h2>
        <form class="row">
            <div class="col md-4">
                <label>Região</label>
                <select class="form-select">
                    <option></option>
                    <option>Noroeste</option>
                    <option>Sul</option>
                </select>
            </div>

            <div class="col md-4">
                <label>Cidade</label>
                <select class="form-select">
                    <option></option>
                    <option>Nova Londrina</option>
                    <option>Marilena</option>
                </select>
            </div>

            <div class="col md-4">
                <label>Ponto Focal(E)</label>
                <select class="form-select">
                    <option></option>
                    <option>Nova Londrina</option>
                    <option>Marilena</option>
                </select>
            </div>
            <div class="col md-4">
                <label>área do curso</label>
                <select class="form-select">
                    <option></option>
                    <option>Tecnologi</option>
                    <option>Gastromia</option>
                    <option>Garoto de programa</option>
                </select>
            </div>
            <div class="col md-4">
                <label>Data da compra</label>
                <input type="date" class="form-control">
            </div>
            <div class="col-md-12 mt-4">
                <label>Observação</label>
                <textarea class="form-control" rows="1"></textarea>
            </div>
        </form>
    </div>

    <div class="col md12 mt-4 justify-content-end">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="../index.html" class="btn btn-primary ms-1">Voltar</a>
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