<?php

include_once('paginas/config.php');

$sql = "SELECT nome_usuario FROM cadastro order by ranking DESC LIMIT 5";
$result = $conexao->query($sql);
$nomes = [];
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
  <link rel="stylesheet" href="css/apresentação.css">
  <link rel="stylesheet" href="css/menu.css ">
  <link rel="stylesheet" href="css/ranking.css">
  <link rel="icon" href="../img/icon.png">
  <link rel="stylesheet" href="css/footer.css">

  <title>CodeGenious</title>

</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.php">CodeGenious</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="#">Jogos</a></li>
        <li><a href="paginas/login.php">Login</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
      </ul>
    </nav>
  </header>
  <script src="js/menu.js"></script>
 

  <div class="center">
    <img src="img/Robo.png" id="robo">

    <div class="ranking">
      <h1>Ranking <img src="img/trofeu-removebg-preview.png" alt="" width="30px" height="30px"></h1>
      <br>
      <img src="img/primeiro-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[0];
      ?></div>
      <img src="img/segundo-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[1];
      ?></div>
      <img src="img/terceiro-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[2];
      ?></div>
      <img src="img/quarto2-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[3];
      ?></div>
      <img src="img/quinto-removebg-preview.png" alt="" width="30px" height="30px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[4];
      ?></div>
    </div>

    </div>
    
  </div>

  
  <div class="comeceaqui">
    <a href="paginas/login.php"><img src="img/comeceaqui.jpg" alt="" width="100%"></a>
  </div>

  
  
  
  
  <footer>
    <div class="footer-content">
      <div class="imgFooter" id="florFooter">
        <img src="img/flor.png" id="imgFlor">
      </div>
      
      <div class="textFooter">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus consequatur rerum deserunt dignissimos quasi facilis repellat odio tempora, recusandae quos ratione, ullam dolore fugit laboriosam facere. Tenetur doloremque labore nihil!
      </div>
      

      <div class="imgFooter">
        <img src="img/roboLupa.png" id="roboFooter">
      </div>


    </div>
  </footer>
</body>

</html>