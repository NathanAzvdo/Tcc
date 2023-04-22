<?php
session_start();
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:login.html');

}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/apresentação.css">
  <link rel="stylesheet" href="../css/menu.css ">


  <title>CodeGenious</title>

</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.html">CodeGenious</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="#">Jogos</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
      </ul>
    </nav>
  </header>
  <script src="../js/menu.js"></script>
  
  
  <h1 style="margin-top: 150px;"><?php
  echo "Olá $logado" ?></h1>
  <button><a href="logout.php">Sair</a></button>
  <div class="sobrenos">
    <img src="../img/sobrenos.png" alt="" width="100%">
  </div>
  


</body>

</html>