<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de vendas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/dashboard.css">
    <script src="../scripts/custom.js" type="text/javascript"></script>

</head>

<script type="text/javascript">

</script>

<body class="body">

    <?php
    require_once('../config/conectaLocal.php');
    require_once('../include/dashboardCalc.php');
    ?>

    <header>
        <div>
            <?php include '../public/sideBar.php'; ?>
        </div>
    </header>
    <div class="tudo">

        <!-- <div class="titulo">
            <h1>Olá, Camila! Seja Bem-Vindo(a)!</h1>
            <h5>Onde deseja navegar?</h5>
        </div> -->

        <div class="card-container">
            <div class="card">
                <div class="card-body">

                    <span class="imgCard"><img src="../img/dashboard/crescimento.png" alt="Vendas"></span>
                    <div class="itens-card">
                        <h5 class="card-title">Vendas</h5>
                        <p class="card-text"> R$ <?php echo $valorFat['faturamento'] ?></p>
                    </div>
                </div>
            </div>






        </div>
    </div>
</body>