<?php

require_once('../config/conectaLocal.php');

$registrosPorPagina = 10;

$resultado_indice = $conn->query("SELECT * FROM produtos");

$totalRegistros = mysqli_num_rows($resultado_indice);
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$indiceInicio = ($paginaAtual - 1) * $registrosPorPagina;

$select = "SELECT prod.id_prod as ID_PRODUTO, prod.codInvicta as COD_INVICTA, prod.nomeProd as NOME_PROD, prod.precoUni as PRECO, prod.cor as COR, prod.modelo as MODELO, est.qtd_est as QTDE_EST, tam.tamanho as TAMANHO FROM produtos prod INNER JOIN estoque est ON est.id_prod = prod.id_prod INNER JOIN tamanhos tam ON tam.id_prod = prod.id_prod GROUP BY prod.id_prod LIMIT $indiceInicio, $registrosPorPagina";
$resultado = $conn->query($select);

$row = mysqli_fetch_assoc($resultado);


?>


