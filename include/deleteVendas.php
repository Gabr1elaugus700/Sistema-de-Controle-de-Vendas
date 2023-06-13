<?php

require_once('../config/conectaLocal.php');

$id = $_GET['id'];

$sql = "delete from vendas where ID = '$id' ";

$delete = $conn->query($sql);

if ($delete == true) {
    echo json_encode(
        array("retorno" => "sucesso")
    );
} else {
    echo json_encode(
        array("retorno" => "erro")
    );
}