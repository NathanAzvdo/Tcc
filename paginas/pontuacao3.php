<?php
session_start();
include_once('config.php');
$email = $_SESSION['email'];

    $sql2 = "SELECT ranking FROM cadastro WHERE email = '{$email}'";
    $resultado2 = mysqli_query($conexao, $sql2);
    if ($linha2 = mysqli_fetch_assoc($resultado2)) {
        $ranking = $linha2['ranking'];
    }
    $novoR = $ranking + 3;
    //querie
    $sql2 = "UPDATE cadastro SET ranking = '{$novoR}' WHERE email = '{$email}'";
    
    
        
    // Executa a query utilizando a conexão correta $conexao
    mysqli_query($conexao, $sql2);
    header('Location:redirect.php');


// Libera recursos
mysqli_free_result($resultado);
mysqli_close($conexao);
?>
