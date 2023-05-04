<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');

}
$email = $_SESSION['email'];
$sql = "SELECT nome_usuario FROM cadastro order by ranking DESC LIMIT 5";
$result = $conexao->query($sql);
$nomes = [1, 2, 3, 4, 5];
$cont=0;
while($USER_DATA = mysqli_fetch_assoc($result))
{
  $nomes[$cont]=$USER_DATA['nome_usuario'];
  $cont++;
}

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
      <a class="logo" href="telaInicial.php">CodeGenious</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="#">Jogos</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <script src="../js/menu.js"></script>
  
  <div class="center">

    <div class="fases">
    <div class="fase">Fase1</div>
    <div class="fase">Fase2</div>
    <div class="fase">Fase3</div>
    <div class="fase">Fase4</div>
    <div class="fase">Fase5</div>
    <div class="fase">Fase6</div>
    <div class="fase">Fase7</div>
    <div class="fase">Fase8</div>
    </div>
  
    
    <div class="ranking">
      <h1>Ranking <img src="../img/trofeu-removebg-preview.png" alt="" width="30px" height="30px"></h1>
      <br>
      <img src="../img/primeiro-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[0];
      ?></div>
      <img src="../img/segundo-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[1];
      ?></div>
      <img src="../img/terceiro-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[2];
      ?></div>
      <img src="../img/quarto2-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[3];
      ?></div>
      <img src="../img/quinto-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[4];
      ?></div>
    </div>
  
</div>
    
    
  <div class="sobrenos">
    <img src="../img/sobrenos.png" alt="" width="100%">
  </div>
  


</body>

</html>