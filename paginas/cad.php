<?php


  $nom = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  

  include_once('config.php');
    
  $result = "INSERT INTO cadastro
  VALUES (default, '$nom', '$senha', '$email', default);";

  if(mysqli_query($conexao, $result)){
    header('location:login.html');
  }
  else{
    echo "error:" .sql ."<br>". mysqli_error($conexao);
  }
    
  
  mysqli_close($conexao);
  
  
?>