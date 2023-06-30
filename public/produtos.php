<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de vendas.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style/tabela.css">


</head>

<script type="text/javascript">
    function exibirPagina(pagina) {
        document.getElementById('pagina').value = pagina;
        document.getElementById('formPaginacao').submit();
    }
</script>

<body class="body">
    <?php
    require_once('../config/conectaLocal.php');

    ?>
    <header>
        <div>
            <?php include '../public/index.php'; ?>
        </div>
    </header>
    <div class="container">
        <div class="table-responsive ">
            <div class="tabela">
                <table>
                    <tr class="cabecalho">
                        <th>ID</th>
                        <th>Cod. Invicta</th>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th>Cor</th>
                        <th>Modelo</th>
                        <th>Tamanho</th>
                        <th>Quantidade</th>
                        <th>#</th>
                    </tr>

                    <?php

                    require_once('../include/retornaTabelaProd.php');

                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<tr id='itensTabela'>";

                        echo "<td>" . $row['ID_PRODUTO'] . "</td>";
                        echo "<td>" . $row['COD_INVICTA'] . "</td>";
                        echo "<td>" . $row['NOME_PROD'] . "</td>";
                        echo "<td>" . "R$" . $row['PRECO'] . "</td>";
                        echo "<td>" . $row['COR'] . "</td>";
                        echo "<td>" . $row['MODELO'] . "</td>";
                        echo "<td>" . $row['TAMANHO'] . "</td>";
                        echo "<td>" . $row['QTDE_EST'] . "</td>";

                    ?>
                        <td style='display: flex; flex-wrap: nowrap; gap: 5px; justify-content: center;'>
                            <button type='button' class='btn btn-primary' id='botaoTabela' style='padding: 5px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;'>
                                <svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-pencil-square' width='16px' height='16px'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                                </svg>
                            </button>
                            <button type='button' class='btn btn-danger' id='botaoExcluir' style='padding: 5px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;' onclick>
                                <a onClick="if (confirm('Deseja realmente excluir o item Seq. ')) { DeletaItem(<?php echo $id; ?>) } else { return false;}">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16px' height='16px' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z' />
                                    </svg>
                                </a>
                            </button>
                            </a>
                        </td>

                    <?php echo "</tr>";
                    } ?>
                </table>

            </div>
        </div>
        <div class="paginacao">
            <ul class="pagination" style="color: black;">
                <?php if ($paginaAtual > 1) : ?>
                    <li><a href="#" onclick="exibirPagina(<?php echo $paginaAtual - 1; ?>)">Anterior</a></li>
                <?php endif; ?>
                <?php for ($pagina = 1; $pagina <= $totalPaginas; $pagina++) : ?>
                    <li class="<?php if ($pagina == $paginaAtual) echo 'active'; ?>">
                        <a href="#" onclick="exibirPagina(<?php echo $pagina; ?>)"><?php echo $pagina; ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($paginaAtual < $totalPaginas) : ?>
                    <li><a href="#" onclick="exibirPagina(<?php echo $paginaAtual + 1; ?>)">Próxima</a></li>
                <?php endif; ?>
            </ul>

        </div>
</body>

</html>