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
    const valorTotal = parseFloat(document.getElementById("valorTotal").value);
    const porcentagemDesconto = parseFloat(document.getElementById("desconto").value);
    const comissao = parseFloat(document.getElementById("comissao").value);

    function calculaDesc() {

        const valorTotal = parseFloat(document.getElementById("valorTotal").value);
        const porcentagemDesconto = parseFloat(document.getElementById("desconto").value);
        const comissao = parseFloat(document.getElementById("comissao").value);

        const desconto = (valorDesc - porcentagemDesconto) / 100;
        const valorDesc = valorTotal - desconto;

        const valorComissao = valorDesc * comissao;

        // alert("O novo Valor do Produto é: R$" + valorDesc)

    };


    function botao() {
        Swal.fire({
            title: 'Aqui Está o Cálculo:',
            text: 'O novo valor do produto é: R$'
        })
    }

    botao();
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
                    <input type="text" class="form-control" id="valorTotal" name="valorTotal" require>
                </div>

                <div class="mb-3">
                    <label class="form-label">Porcentagem Desconto:</label>
                    <input class="form-control" id="desconto" name="desconto">
                </div>

                <div class="mb-3">
                    <label class="form-label">Comissão:</label>
                    <input class="form-control" id="comissao" name="comissao" value="% ">
                </div>




            </form>
            <button type="submit" class="btn botoes" style="background-color: #f77594; color: black ; padding: 20px" onclick="botao()" data-swal-toast-template='#my-template'>Calcular Desconto</button>
        </div>
    </div>



</body>

</html>