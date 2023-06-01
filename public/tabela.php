<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de vendas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/tabela.css">


</head>

<body class="body">
    <?php
    require_once('../config/conectaLocal.php');
    require_once('../include/retornaTabela.php');
    ?>
    <div class="tabela">
        <table>
            <tr class="cabecalho">
                <th>ID</th>
                <th>Nome</th>
                <th>Cor</th>
                <th>Tecido</th>
                <th>Tamanho</th>
                <th>Pagamento</th>
                <th>Data</th>
                <th>#</th>
            </tr>
            
            <?php

            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr id='itensTabela'>";

                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nomeProd'] . "</td>";
                    echo "<td>" . $row['cor'] . "</td>";
                    echo "<td>" . $row['tecido'] . "</td>";
                    echo "<td>" . $row['tamanho'] . "</td>";
                    echo "<td>" . $row['modoPag'] . "</td>";
                    echo "<td>" . $row['dataVenda'] . "</td>";
                    echo "<td>" . "#" . "</td>";
                echo "<tr>";
            }

            ?>

        </table>
    </div>
</body>

</html>