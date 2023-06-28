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
    <div class="titulo">Jogo 05
      <div><img src="../img/jogo-removebg-preview .png"></div>
    </div>
    <div class="jogo2">
        <div class="centerHang">

            <div id="hangman">
                <img src="../img/vazia.png" id="hangman-img">
            </div>
            <div id="word"></div>
            <div id="letters"></div>
        </div>
    </div>
    <script src="../js/jogo5.js"></script>
  </div>
</div>
  <div id="cinco-estrelas">
      <form  action="jogo5.php" method="POST">
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
      <form  action="jogo5.php" method="POST">
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
      <div id="uma-estrela">
      <form action="jogo5.php" method="POST">
      <div class="pop-up">
      <input type="hidden" name="form_id" value="form3">
        <div class="estrelas">
          <img src="../img/estrela.png" class="estrela">
        </div>
        <div class="cincoE">
          
        </div>
        <div class="prox">
          <button type="submit"><b>Tente novamente</b></button>
        </div>
      </form>
      </div>
      
</body>
</html>

