<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');

}
$email = $_SESSION['email'];
$sql = "SELECT nome_usuario FROM cadastro order by ranking DESC LIMIT 8";
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
  <link rel="stylesheet" href="../css/apresentação.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/ranking.css">
  <link rel="stylesheet" href="../css/footer.css">
  
  <link rel="icon" href="../img/icon.png">


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

    <div class="topTres">
      <div class="first">
        <img src="../img/brilhoprim.png" style="width:80px; transform: scaleX(-1);">
        <img src="../img/primeiro-removebg-preview.png">
        <img src="../img/brilhoprim.png" style="width:80px;">
        <div class="rankName"><?php echo $nomes[0]; ?></div>
      </div>


      <div class="second">
        <img src="../img/segundo-removebg-preview.png">
        <div class="rankName"><?php echo $nomes[1]; ?></div>
      </div>

      <div class="third">
      <img src="../img/terceiro-removebg-preview.png">
        <div class="rankName"><?php echo $nomes[2]; ?></div>
      </div>


    
    
  
    </div>
  
    
    <div class="ranking">
      <h1>Ranking <img src="../img/trofeu-removebg-preview.png" alt="" width="30px" height="30px"></h1>
      <br>
      <img src="../img/quarto2-removebg-preview.png" alt="" width="40px" height="40px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[3];
      ?></div>
      <img src="../img/quinto-removebg-preview.png" alt="" width="40px" height="40px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[4];
      ?></div>
      <img src="../img/sexto-removebg-preview.png" alt="" width="40px" height="40px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[5];
      ?></div>
      <img src="../img/setimo-removebg-preview.png" alt="" width="40px" height="40px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[6];
      ?></div>
      <img src="../img/oitavo-removebg-preview.png" alt="" width="40px" height="40px" style="margin-top: 5px;">
      <br>
      <div class="rankName"><?php
      echo $nomes[7];
      ?></div>
    </div>
  
</div>



  <div class="fases">
    <div class="fase"><div class="title-fase">Fase1</div><br>Váriaveis</div>
    <div class="fase"><div class="title-fase">Fase2</div><br>Comandos de entrada e operadores</div>
    <div class="fase"><div class="title-fase">Fase3</div><br>Operadores lógicos e relacionais</div>
    <div class="fase"><div class="title-fase">Fase4</div><br>Estruturas Condicionais</div>
    <div class="fase"><div class="title-fase">Fase5</div><br>Estruturadas de Repetição</div>
    <div class="fase"><div class="title-fase">Fase6</div><br>Procedimentos</div>
    <div class="fase"><div class="title-fase">Fase7</div><br>Funções</div>
    <div class="fase"><div class="title-fase">Fase8</div><br>Vetores</div>
    <div class="fase"><div class="title-fase">Fase9</div><br>Matrizes</div>
  </div>
    
    

<footer>
    <div class="footer-content">
      <div class="imgFooter" id="florFooter">
        <img src="../img/flor.png" id="imgFlor">
      </div>
      
      <div class="textFooter">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus consequatur rerum deserunt dignissimos quasi facilis repellat odio tempora, recusandae quos ratione, ullam dolore fugit laboriosam facere. Tenetur doloremque labore nihil!
      </div>
      
      

      <div class="imgFooter">
        <img src="../img/roboLupa.png" id="roboFooter">
      </div>


    </div>
  </footer>
  


</body>

</html>