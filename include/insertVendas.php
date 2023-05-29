<?php

require_once('../config/conectaLocal.php');

$consMaxId = 'SELECT MAX(id) FROM `vendas`';
$result    = $conn->execute_query($consMaxId);
// $idProd = mysqli_query($conn, $consMaxId);



// $tecido = $_POST['tecido'];
// $cor = $_POST['tecido'];
// $tamanho = $_POST['tecido'];
// $modoPag = $_POST['tecido'];

// INSERT INTO `vendas` (`id`, `nomeProd`, `tecido`, `cor`, `tamanho`, `data`, `modoPag`) VALUES ('2', 'Paty', 'Liso', 'Branco', 'P', '2023-05-26', 'PIX');

// SELECT MAX(id) FROM `vendas`;

echo $result;

?>