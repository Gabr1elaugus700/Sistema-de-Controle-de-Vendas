<?php

require_once('../config/conectaLocal.php');

$registrosPorPagina = 10;

$resultado_indice = $conn->query("SELECT * FROM vendas");

$totalRegistros = mysqli_num_rows($resultado_indice);
$totalPaginas = ceil($totalRegistros / $registrosPorPagina);

$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$indiceInicio = ($paginaAtual - 1) * $registrosPorPagina;

$select = "SELECT id, nomeProd, tecido, cor, tamanho, modoPag, date_format(data, '%d/%m/%Y') as dataVenda, valor FROM `vendas` order by id LIMIT $indiceInicio, $registrosPorPagina";
$resultado = $conn->query($select);

$row = mysqli_fetch_assoc($resultado);



?>