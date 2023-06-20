<?php
        
        session_start();
        include_once('config.php');
        $email = $_SESSION['email'];
        
        // Executa a consulta SQL
        $sql = "SELECT nivel FROM cadastro WHERE email = '{$email}'";
        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }
        
        // Obtém o valor retornado pela consulta
        if ($linha = mysqli_fetch_assoc($resultado)) {
            $nivel = $linha['nivel'];
        }
        // Usa o valor da variável $nivel conforme necessário
        if ($nivel < 8) {
          
            $sql = "UPDATE cadastro SET nivel = '8' WHERE email = '{$email}'";
            mysqli_query($conexao, $sql);
            header('Location:pontuacao5.php');
        }else{
            header('Location:comandoEnt.php');
        }
        
        // Libera recursos
        mysqli_free_result($resultado);
        mysqli_close($conexao);
        
      ?>