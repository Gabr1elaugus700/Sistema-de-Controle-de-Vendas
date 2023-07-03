<?php

require_once('../config/conectaLocal.php');

 


$conn->begin_transaction();

try {
    $sql = "DELETE FROM produtos WHERE id_prod = $id";
    $conn->query($sql);

    $sql = "DELETE FROM tamanhos WHERE id_prod = $id";
    $conn->query($sql);

    $sql = "DELETE FROM estoque WHERE id_prod = $id";
    $conn->query($sql);

    echo "<div class='alert alert-success' role='alert'>
            Excluido com sucesso!
        </div>";
} catch (Exception $e) {
     
    $conn->rollback();
    echo "<div class='alert alert-danger' role='alert'>
            Erro: Usuário com esse id não encontrado. Verifique!
        </div>" . $e->getMessage();
}
