<?php

require_once('../config/conectaLocal.php');

$consMaxId = 'SELECT MAX(id)+1 as id FROM `vendas`';
$result    = $conn->query($consMaxId); //Executa o Max id

$row = $result->fetch_assoc();
$id = $row['id'];

// Obtém os valores dos campos do formulário

$nomeProd = $_POST["nomeProd"];
$tecido = $_POST["tecido"];
$cor = $_POST["cor"];
$tamanho = $_POST["tamanho"];
$modoPag = $_POST["modoPag"];

$hoje = date('Y/m/d');

$insert = "INSERT INTO vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag) VALUES ('$id', '$nomeProd', '$tecido', '$cor', '$tamanho', '$hoje', '$modoPag');";

$executa_insert = $conn->query($insert);

if ($executa_insert == true) {
    echo "Insert Realizado!";
} else {
    echo "Não inserido, Verificar";
}


// INSERT INTO `vendas` (`id`, `nomeProd`, `tecido`, `cor`, `tamanho`, `data`, `modoPag`) VALUES ('2', 'Paty', 'Liso', 'Branco', 'P', '2023-05-26', 'PIX');

// SELECT MAX(id) FROM `vendas`;


// {Mostra o Resultado da Query}

// if ($result->num_rows > 0) {
//     // Obter a única linha de resultado
//     $row = $result->fetch_assoc();

//     // Exibir os dados da linha
//     echo "ID: " . $row['id']; 
// } else {
//     echo "Nenhum resultado encontrado.";
// }



$conn->close();
