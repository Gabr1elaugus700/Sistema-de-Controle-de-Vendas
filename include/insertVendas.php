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
$data = $_POST["data"];


$insert = "INSERT INTO vendas (id, nomeProd, tecido, cor, tamanho, data, modoPag) VALUES ('$id', '$nomeProd', '$tecido', '$cor', '$tamanho', '$data', '$modoPag');";

$executa_insert = $conn->query($insert);

if ($executa_insert == true) {
    echo "Insert Realizado!";
} else {
    echo "Não inserido, Verificar";
}


$conn->close();

return "ok";