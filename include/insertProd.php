<?php

require_once('../config/conectaLocal.php');

$nomeProd = $_POST["nomeProd"];
$cor      = $_POST["cor"];
$idProd   = $_POST["id_prod"];
$modelo   = $_POST["modelo"];
$preco    = $_POST["precoUni"];
$qtde     = $_POST["qtde"];

$selecionados = $_POST["opcoes"];

if (count($selecionados) > 1) {
    $consMaxId_tam = 'SELECT MAX(id_tam) as max_id_tam FROM `tamanhos`';
    $resultTam = $conn->query($consMaxId_tam);
    $valorID = $resultTam->fetch_assoc();
    $maxIdTam = $valorID['max_id_tam'];

    // Aqui apenas verifica Se o valor do Id é nulo
    if ($maxIdTam === null) {
        $id_tam = 1;
    } else {
        $id_tam = $maxIdTam + 1;
    }

    foreach ($selecionados as $tamanho) {
        $sql_tamanhos = "INSERT INTO tamanhos (id_tam, tamanho) VALUES ('$id_tam', '$tamanho')";
        $execSql = $conn->query($sql_tamanhos);

        if ($execSql === TRUE) {
            echo "Inserido o tamanho: " . $tamanho . "<br>";
            $id_tam++; 
        } else {
            echo "Erro ao inserir valor: " . $conn->error;
        }
    }
} else {
    echo "somente um registro selecionado!";
}




// $selecionados = $_POST["opcoes"];


// // $checkbox =  implode(",",$selecionados);

// if (count($selecionados) > 1) {

//     $i = 1;
//     while ($i != count($selecionados)) {

//         $consMaxId_tam = 'SELECT MAX(id_tam)+1 as id_tam FROM `tamanhos`';
//         $resultTam     = $conn->query($consMaxId_tam);
//         $valorID       = $resultTam->fetch_assoc();
//         $id_tam        = $valorID['id_tam'];

        
//         foreach ($selecionados as $tamanho) {

//             $sql_tamanhos = "INSERT INTO tamanhos (id_tam, tamanho) VALUES ('$id_tam', '$tamanho')";
//             $execSql = $conn->query($sql_tamanhos);

//             if ($conn->query($sql_tamanhos) === TRUE) {
//                 echo "Inserido o tamanho: " . $tamanho . "<br>";
//             } else {
//                 echo "Erro ao inserir valor: " . $conn->error;
//             }
//         }

//         $i++;
//     }
// }
