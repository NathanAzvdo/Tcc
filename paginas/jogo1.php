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
       
        if ($nivel < 1) {
          
            $sql = "UPDATE cadastro SET nivel = '1' WHERE email = '{$email}'";
            mysqli_query($conexao, $sql);
            
            if (isset($_POST['form_id'])) {
                $formId = $_POST['form_id'];
                
                if ($formId === 'form1') {
                    header('Location:pontuacao5.php?jogo=variaveis');
                } elseif ($formId === 'form2') {
                    header('Location:pontuacao3.php?jogo=variaveis');
                } elseif ($formId === 'form3') {
                    header('Location:variaveisJogo.php');
                }
              }
        }
            else{
            header('Location:telainicial.php');
            }
        
        // Libera recursos
        mysqli_free_result($resultado);
        mysqli_close($conexao);
        
      ?>