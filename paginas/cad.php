<?php
  
  $nom = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $cfSenha = filter_input(INPUT_POST, 'confsenha', FILTER_SANITIZE_STRING);
  
  $hash = password_hash($senha, PASSWORD_DEFAULT);

    
  include_once('config.php');

    $result = "INSERT INTO cadastro
    VALUES (default, '$nom', '$email', default, '$hash');";
  
    if(mysqli_query($conexao, $result)){
      header('location:login.html');
    }
    else{
      echo "error:" .$result ."<br>". mysqli_error($conexao);
    }
?>