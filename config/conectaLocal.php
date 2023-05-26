<?php

    $servidor = "localhost";
    $usuario  = "admin";
    $senha    = "admin";
    $dbname   = "controle";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if($conn->connect_error ) {
        die ("Erro na conexão: " . mysqli_connect_error());
    } 
    // else {
    //     echo "Conexão Ok!";
    // }

?>