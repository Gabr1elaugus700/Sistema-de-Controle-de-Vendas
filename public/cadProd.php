<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de vendas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/cadProd.css">
</head>

<script> 

</script>


<body class="body">
    <header>
        <div>
            <?php

            include '../public/index.php';
            require_once('../config/conectaLocal.php');

            ?>
        </div>
    </header>
    <div class="cont">

        <form class="formCad" action="../include/insertProd.php" method="post">
            <H3>Cadastro de Produtos: </H3>
            <div class="valores">
                <label class="form-label label">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProd">
            </div>
            <div class="valores">
                <label class="form-label label">Cor </label>
                <input type="text" class="form-control" name="cor">
            </div>
            <div class="valores">
                <label class="form-label label">Código Invicta:</label>
                <input type="text" class="form-control" name="id_prod">
            </div>
            <div class="valores">
                <label class="form-label label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="valores">
                <label class="form-label label">Preço</label>
                <input type="text" class="form-control" name="precoUni">
            </div>
            <div class="valores">
                <label class="form-label label">Quantidade:</label>
                <input type="text" class="form-control" name="qtde">
            </div>
            <div class="valores">
                <label class="label">Tamanhos:</label>
                <div class="checkbox">
                    <input type="checkbox" class="selec" name="opcoes[]" value="PP"> PP
                    <input type="checkbox" class="selec" name="opcoes[]" value="P"> P
                    <input type="checkbox" class="selec" name="opcoes[]" value="M"> M
                    <input type="checkbox" class="selec" name="opcoes[]" value="G"> G
                    <input type="checkbox" class="selec" name="opcoes[]" value="GG"> GG
                </div>
            </div>
            <div class="botoes">
                <button type="submit" class="btn botoes" style="background-color: #f77594; color: black">Salvar</button>
            </div>
        </form>
    </div>




</body>

</html>