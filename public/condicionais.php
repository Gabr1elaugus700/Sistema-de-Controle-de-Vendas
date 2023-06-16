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

    <header>
        <div>
            <?php include '../public/index.php'; ?>
        </div>
    </header>
    
<script> 
function enviarFormulario() {
    var checkboxes = document.getElementsByName('produtos[]');
    var selecionado = false;
    
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            selecionado = true;
            break;
        }
    }
    
    if (!selecionado) {
        alert('Selecione pelo menos um produto!');
        return false;
    }
    
    return true;
}

</script>
<body>
    <h1>Lista de Produtos</h1>
    
    <form action="../include/processar.php" method="post" onsubmit="return enviarFormulario()">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Produto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="produtos[]" value="produto1"></td>
                    <td>Produto 1</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produtos[]" value="produto2"></td>
                    <td>Produto 2</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="produtos[]" value="produto3"></td>
                    <td>Produto 3</td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
