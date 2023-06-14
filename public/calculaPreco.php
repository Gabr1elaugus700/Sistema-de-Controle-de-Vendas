<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculo De Porcentegem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="../style/calculaPreco.css">


</head>

<script>
    function botao() {
        // const valorDesc = valorTotal - porcentagemDesconto;
        // const valorComissao = valorDesc * comissao;

        const valorTotal = parseFloat(document.getElementById("valorTotal").value);
        const porcentagemDesconto = parseFloat(document.getElementById("desconto").value);
        const comissao = parseFloat(document.getElementById("comissao").value);
        var valorDesc = valorTotal - porcentagemDesconto;
        const porComi = comissao / 100;
        const valorComissao = valorDesc * porComi;

        // alert(desconto)



        Swal.fire({
            icon: 'success',
            title: 'Aqui está o seu Cálculo:',
            html:
                '<b> Valor Antigo:</b> R$' + valorTotal + '<br>' +
                '<b> Valor Com desconto:</b> R$' + valorDesc + '<br>' +
                '<b> Total da Comissão:</b> R$ ' + valorComissao

            //  +  'Valor Comissão: 


        });

    }
</script>


<body>
    <header>
        <div>
            <?php

            include '../public/index.php';
            require_once('../config/conectaLocal.php');

            ?>
        </div>
    </header>

    <div class="corpo">
        <div class="form">
            <form class="formulario" id="form">
                <h3>Calculo de Desconto</h3>
                <div class="mb-3">
                    <label for="valorTotal" class="form-label">Valor Total:</label>
                    <input type="text" class="form-control" id="valorTotal" name="valorTotal" required="required">
                </div>

                <div class="mb-3">
                    <label class="form-label">Porcentagem Desconto:</label>
                    <input class="form-control" id="desconto" name="desconto" required="required">
                </div>

                <div class="mb-3">
                    <label class="form-label">Comissão:</label>
                    <input class="form-control" id="comissao" name="comissao" required="required">
                </div>

            </form>
            <button type="button" class="btn botoes" style="background-color: #f77594; color: black ; padding: 20px" id="calcularDesconto" onclick="botao()">Calcular Desconto</button>
        </div>
    </div>



</body>

</html>