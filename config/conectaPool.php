<?php

    $servidor = "NT Service\MSSQLSERVER";
    $usuario  = "sapiens";
    $senha    = "sapiens";

    $conexao = mysqli_connect($servidor, $usuario, $senha);

    // Verificando Conexão: 

    if(!$conexao) {
        die("Falha na Conexão: " . mysqli_connect_error());
    } else {
        "Conexão OK!";
    }

?>