<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');

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
  
  < class="anima">
  <div class="titulo">Jogo 02
    <div><img src="../img/jogo-removebg-preview .png"></div>

  </div>
  <div class="jogo2">
    <div class="memory-game">
    <div class="memory-card" data-framework="a">
      <img class="front-face" src="../img/&&.jpg" alt="Carta 1">
      <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>
    <div class="memory-card" data-framework="a">
      <img class="front-face" src="../img/E.jpg" alt="Carta 1">
      <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>
    
    <div class="memory-card" data-framework="b">
        <img class="front-face" src="../img/OU.jpg" alt="Carta 2">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>
      <div class="memory-card" data-framework="b">
        <img class="front-face" src="../img/||.jpg" alt="Carta 2">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>

    <div class="memory-card" data-framework="c">
        <img class="front-face" src="../img/nao.jpg" alt="Carta 3">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>
      <div class="memory-card" data-framework="c">
        <img class="front-face" src="../img/!.jpg" alt="Carta 3">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>
      <div class="memory-card" data-framework="d">
        <img class="front-face" src="../img/2+2.jpg" alt="Carta 4 ">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>
      <div class="memory-card" data-framework="d">
        <img class="front-face" src="../img/4.jpg" alt="Carta 4">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>

    <div class="memory-card" data-framework="e">
        <img class="front-face" src="../img/2.5.jpg" alt="Carta 5 ">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
      </div>
      <div class="memory-card" data-framework="e">
        <img class="front-face" src="../img/10D4.jpg" alt="Carta 5">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>
    <div class="memory-card" data-framework="f">
      <img class="front-face" src="../img/2.4.jpg" alt="Carta 6 ">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>
      <div class="memory-card" data-framework="f">
        <img class="front-face" src="../img/8.jpg" alt="Carta 6">
        <img class="back-face" src="../img/cartaF.png" alt="Verso da Carta">
    </div>
      
    <!-- Repita o código acima para os outros pares de cartas -->
  </div>
  <div class="error-count">Erros: <span id="error-counter">0</span></div>
  <script src="../js/jogo2.js"></script>
  
  
<div id="cinco-estrelas">
      <form  action="jogo2.php" method="POST">
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
  </div>
  
  <div id="tres-estrelas">
      <form  action="jogo2.php" method="POST">
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
      </div>
    </div>
</body>
</html>