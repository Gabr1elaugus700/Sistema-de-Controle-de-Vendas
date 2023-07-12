<?php

require_once('../config/conectaLocal.php');

$faturamento = $conn->query('SELECT sum(valor) as faturamento FROM `vendas`');
$valorFat = mysqli_fetch_assoc($faturamento);

// echo $valorFat['faturamento'];