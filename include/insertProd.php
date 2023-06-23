<?php

require_once('../config/conectaLocal.php');

$nomeProd = $_POST["nomeProd"];
$cor      = $_POST["cor"];
$cod_invicta = $_POST["cod_invicta"];
$modelo   = $_POST["modelo"];
$preco    = $_POST["precoUni"];
$qtde     = $_POST["qtde"];
$selecionados = $_POST["opcoes"];


$consulta_Id_qtde = "SELECT MAX(id_est)+1 as id_qtde From `estoque`";
$result_id_qtde   = $conn->query($consulta_Id_qtde);
$qtde_prod_assoc    = $result_id_qtde->fetch_assoc();
$id_qtde            = $qtde_prod_assoc['id_qtde'];


/////////////////      Cadastro de Produtos     /////////////////////

$consulta_Id_Prod = "SELECT MAX(id_prod)+1 as max_id_prod From `produtos`";
$result_id_prod   = $conn->query($consulta_Id_Prod);

$id_prod_assoc    = $result_id_prod->fetch_assoc();
$id_Prod          = $id_prod_assoc['max_id_prod'];

$insereProd = "INSERT INTO produtos (id_prod, codInvicta, nomeProd, precoUni, cor, modelo) VALUES ('$id_Prod', '$cod_invicta', '$nomeProd', $preco, '$cor', '$modelo');";

$Exe_Ins_Prod = $conn->query($insereProd);

if ($Exe_Ins_Prod === TRUE) {
    echo "Inserido com sucesso! <br>";
} else {
    echo "Não inserido, Verificar! <br>" .  $conn->error;
}


/////////////////      Cadastro de tamanhos      ////////////////////

$consMaxId_tam = 'SELECT MAX(id_tam) as max_id_tam FROM `tamanhos`';
$resultTam = $conn->query($consMaxId_tam);
$valorID = $resultTam->fetch_assoc();
$maxIdTam = $valorID['max_id_tam'];

if (count($selecionados) > 1) {
    // Aqui apenas verifica Se o valor do Id é nulo
    if ($maxIdTam === null) {
        $id_tam = 1;
    } else {
        $id_tam = $maxIdTam + 1;
    }

    foreach ($selecionados as $tamanho) {
        $sql_tamanhos = "INSERT INTO tamanhos (id_tam, tamanho, id_prod) VALUES ('$id_tam', '$tamanho', '$id_Prod')";
        $execSql = $conn->query($sql_tamanhos);

        $insert_qtde  = "INSERT INTO estoque (id_est, id_prod, id_tam, qtd_est) VALUES ('$id_qtde', '$id_Prod', '$id_tam', '$qtde')";
        $Exe_Ins_qtde = $conn->query($insert_qtde);

        if ($execSql === TRUE) {
            echo "Inserido o tamanho: " . $tamanho . "<br>";
            $id_tam++;
            $id_qtde++;
        } else {
            echo "Erro ao inserir valor: " . $conn->error;
        }
    }
} else {

    $id_tam = $maxIdTam + 1;
    $unicoSel = implode($selecionados);
    $sql_tamanhos = "INSERT INTO tamanhos (id_tam, tamanho) VALUES ('$id_tam', '$unicoSel')";
    $execSql = $conn->query($sql_tamanhos);

    $insert_qtde  = "INSERT INTO estoque (id_est, id_prod, id_tam, qtd_est) VALUES ('$id_qtde', '$id_Prod', '$id_tam', '$qtde')";
    $Exe_Ins_qtde = $conn->query($insert_qtde);


    if ($execSql === TRUE) {
        echo "Inserido o tamanho: " . $unicoSel . " Com o Id: " . $id_tam;
    } else {
        echo "Erro ao inserir valor: " . $conn->error;
    }
}
