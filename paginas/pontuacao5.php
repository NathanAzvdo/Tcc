<?php
session_start();
include_once('config.php');
$email = $_SESSION['email'];

    $sql2 = "SELECT ranking FROM cadastro WHERE email = '{$email}'";
    $resultado2 = mysqli_query($conexao, $sql2);
    if ($linha2 = mysqli_fetch_assoc($resultado2)) {
        $ranking = $linha2['ranking'];
    }
    $novoR = $ranking + 5;
    //querie
    $sql2 = "UPDATE cadastro SET ranking = '{$novoR}' WHERE email = '{$email}'";
    
    
        
    // Executa a query utilizando a conexão correta $conexao
    mysqli_query($conexao, $sql2);

    if (isset($_GET['jogo'])) {
        if ($_GET['jogo'] == "variaveis") {
          header('Location:comandoEnt.php'); 
        }
        else if ($_GET['jogo'] == "entrada") {
            header('Location:estCond.php'); 
        }
        else if ($_GET['jogo'] == "condicionais") {
            header('Location:estRep.php'); 
        }
        else if ($_GET['jogo'] == "repeticao") {
            header('Location:func.php'); 
        }
        else if ($_GET['jogo'] == "Func") {
            header('Location:Vetores.php'); 
        }
        else if ($_GET['jogo'] == "Vet") {
            header('Location:Matrizes.php'); 
        }
        else{
            header('Location:telaInicial.php');
        }
        }

// Libera recursos
mysqli_free_result($resultado);
mysqli_close($conexao);
?>
