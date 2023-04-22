<?php
    $dbHost ='localhost';
    $dbUsername='root';
    $dbPassword= 'nt28012004';
    $dbName = 'codegenious';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    

    if($conexao->connect_errno){
        echo "Erro ao conectar com o banco de dados!";
    }
?>