<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de vendas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/index.css">
    <script src="../scripts/custom.js" type="text/javascript"></script>

</head>

<script type="text/javascript">

</script>

<body class="body">

    <?php
    require_once('../config/conectaLocal.php');
    ?>

    <header>
        <div>
            <?php include '../public/sideBar.php'; ?>
        </div>
    </header>
    <div class="tudo">

        <div class="titulo">
            <!-- Colocar Variavel com o login do Usuário -->
            <h1>Olá, Camila! Seja Bem-Vindo(a)!</h1>
            <h5>Onde deseja navegar?</h5>
        </div>
        <div class="card-container">

            <div class="card">
                <a href="../public/cadProd.php">
                    <!-- <div class="card-header">Header</div> -->
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/mao.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Produtos</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/dinheiro.png" alt="Vendas"></span>
                            <h5 class="card-title">Lista de Vendas</h5>
                            <!-- <p class="card-text">Aqui, Encontra todas as vendas. Podendo Filtrar e exporta-las!</p> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/ponto-de-venda.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Venda</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/ponto-de-venda.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Venda</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/ponto-de-venda.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Venda</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/ponto-de-venda.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Venda</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="../public/cadProd.php">
                    <div class="card-body">
                        <div class="itens-card">
                            <span class="imgCard"><img src="../img/iconCard/ponto-de-venda.png" alt="Vendas"></span>
                            <h5 class="card-title">Cadastro de Venda</h5>
                            <!-- <p class="card-text">Nessa tela, você pode cadastrar novos produtos ou adicionar estoque aos produtos já existente em seu sistema!</p> -->
                        </div>
                    </div>
                </a>
            </div>




        </div>
    </div>
</body>