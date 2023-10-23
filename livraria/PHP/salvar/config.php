<?php
    $servidor = "localhost";
    $username = "root";
    $password = "";
    $banco = "livraria_ofc";

    $conexao = mysqli_connect($servidor, $username, $password, $banco);

     if (!$conexao) {
        echo "não conectado";
    }

    else { 
        echo "conectado";
    }
 
?>