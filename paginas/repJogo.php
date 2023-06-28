<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');

}
$email = $_SESSION['email'];
        
// Executa a consulta SQL
  $sql = "SELECT nivel FROM cadastro WHERE email = '{$email}'";
  $resultado = mysqli_query($conexao, $sql);
        
  if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
  }
        
  if ($linha = mysqli_fetch_assoc($resultado)) {
    $nivel = $linha['nivel'];
  }
  if($nivel<3){
    header('Location:telaInicial.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/jogos.css">
  <link rel="icon" href="../img/icon.png">


  <title>CodeGenious - Jogo da memória</title>

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
        <li><a href="telaInicial.php#jogosDiv">Jogos</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <script src="../js/menu.js"></script>
  
  <div class="anima">
  <div class="titulo">Jogo 04
    <div><img src="../img/jogo-removebg-preview .png"></div>
  </div>
    <div class="jogo2">
      <div class="textJogo2">

        <h1>21 com conteúdo educativo</h1>
        <p>Bem-vindo ao 21 com conteúdo educativo! O objetivo do jogo é chegar o mais próximo possível de 21 pontos sem ultrapassá-lo.</p>
        <p>Você receberá cartas clicando no botão "Hit". Cada carta terá um valor de 2 a 11. Se sua pontuação ultrapassar 21, você perde.</p>
        <p>Se você estiver satisfeito com sua pontuação atual, clique no botão "Stand" para encerrar sua rodada.</p>
      </div>

  <p id="message">Clique em "Hit" para receber uma carta.</p>
  <p id="educational-content"></p>
  <p id="score">Pontuação: 0</p>
  <div id="buttons">
    <button id="hit-button">Hit</button>
    <button id="stand-button">Stand</button>
  </div>
    </div>
    <script src="../js/jogo4.js"></script>
</div>
  
    <div id="cinco-estrelas">
      <form  action="jogo4.php" method="POST">
        <div class="pop-up">
          <div class="trofeu"><img src="../img/trofeu.png" alt=""></div>
          <input type="hidden" name="form_id" value="form1">
          <div class="estrelas">
            <img src="../img/estrela.png" class="estrela">
            <img src="../img/estrela.png" class="estrela">
            <img src="../img/estrela.png" class="estrela">
          <img src="../img/estrela.png" class="estrela">
          <img src="../img/estrela.png" class="estrela">
        </div>
        <div class="cincoE">
          <img src="../img/cincoE .png" alt="">
        </div>
        <div class="prox">
          <button type="submit"><b>Continuar</b></button>
        </div>
      </form>
    </div> 
  
    <div id="tres-estrelas">
      <form  action="jogo4.php" method="POST">
      <div class="pop-up">
      <input type="hidden" name="form_id" value="form2">
        <div class="estrelas">
          <img src="../img/estrela.png" class="estrela">
          <img src="../img/estrela.png" class="estrela">
          <img src="../img/estrela.png" class="estrela">
        </div>
        <div class="cincoE">
          
          </div>
          <div class="prox">
            <button type="submit"><b>Continuar</b></button>
          </div>
        </form>
    </div> 

</body>
</html>