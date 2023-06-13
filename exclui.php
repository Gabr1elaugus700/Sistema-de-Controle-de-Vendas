<?php 

    include("./include/conecta.php");

    $id = $_POST['id'];
    $sql_id = "DELETE FROM pusu WHERE  id = '$id'";

    $result = mysqli_query($con, $sql_id); 

    if ($result == true){
        //echo "Excluido com Sucesso!";
        echo json_encode(
            array("retorno"   =>"sucesso" )
        );
    }
    else{
        //echo "Erro ao excluir";
        echo json_encode(
            array("retorno"   =>"erro" )
        );
    }

    
?>
