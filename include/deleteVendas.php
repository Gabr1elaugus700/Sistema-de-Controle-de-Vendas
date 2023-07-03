<?php

require_once('../config/conectaLocal.php');

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $sql = "DELETE from vendas where ID = $id";

    $delete = $conn->query($sql);
 
    if ($delete == true) {
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>
    Usuário Excluido com sucesso!
  </div>"];
    } else {
        $retorna =['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
        Erro. Usuário não excluido
      </div>"];
    }
} else {
    $retorna =['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>
    Nenhum Usuário encontrado. Verifique! 
  </div>"];
}

echo json_encode($retorna); 