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

        if($nivel==1){
            header('Location:comandoEnt.php');
        }
        else if($nivel==2){
            header('Location:estCond.php');
        }
        else if($nivel==3){
            header('Location:estRep.php');
        }
        else{
            header('Location:telaInicial.php');
        }
?>