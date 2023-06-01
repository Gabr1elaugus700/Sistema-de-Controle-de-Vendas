<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Controle de vendas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/main.css">


</head>

<body class="body">
    <?php
    require_once('../config/conectaLocal.php');
    ?>

    <div class="divForm">
        <form class="form" action="../include/insertVendas.php" method="post">
            <div class="formulario">
                <div class="mb-3">
                    <label class="form-label">Nome do produto:</label>
                    <input type="text" class="form-control" name="nomeProd">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tecido:</label>
                    <input class="form-control" name="tecido">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cor:</label>
                    <input class="form-control" name="cor">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tamanho:</label>
                    <input class="form-control" name="tamanho">
                </div>
                <div class="mb-3">
                    <label class="form-label">Forma de Pagamento:</label>
                    <select class="form-control" name="modoPag">
                        <option value="">** Selecione **</option>
                        <option value="PIX">PIX</option>
                        <option value="Cartão de Crédito">Cartão de Crédito</option>
                        <option value="Cartão de Débito">Cartão de Débito</option>
                    </select>
                </div>
                <div class="botoes">
                    <button type="button" class="btn botoes" style="background-color: #f77594; color: black">Consultar Vendas</button>
                    <button type="submit" class="btn botoes" style="background-color: #f77594; color: black">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>