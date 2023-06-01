<?php

require_once('../config/conectaLocal.php');

$select = "SELECT id, nomeProd, tecido, cor, tamanho, modoPag, date_format(data, '%d/%m/%Y') as dataVenda FROM `vendas` order by id;";
$resultado = $conn->query($select);

$row = mysqli_fetch_assoc($resultado);



?>