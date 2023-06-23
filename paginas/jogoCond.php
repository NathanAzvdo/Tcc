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
  <script src="../js/jogo1.js"></script>
  
  <div class="anima">
  <div class="titulo">Jogo 03
    <div><img src="../img/jogo-removebg-preview .png"></div>

  </div>
  <div class="divsLadoaLado">
    <div class="anima3">

      <div class="personagem">
        <img src="../img/cond1.png">
      </div>
    </div>

      <div class="questao">
        <div class="anima2">

          <div class="title-quest">
            <b>Qual é o resultado dessa condição?</b>
          </div>
          <div class="opcoes">
            <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn1">
            <img src="../img/a.png">
            <p>"Você não tem 5 balas!"</p>
          </div>
          <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn2">
            <img src="../img/b.png">
            <p>"Você não possui nenhuma bala!"</p>
          </div>
          <div class="opcao" onclick="certa('btn3', 'btn1', 'btn2', 'btn4')" id="btn3">
            <img src="../img/c.png">
                <p>"Você tem 5 balas!"</p>
              </div>
              <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn4">
                <img src="../img/d.png">
                <p>"Você comprou 5 balas."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="divsLadoaLado">
        
        <div class="personagem">
          <img src="../img/cond2.png">
        </div>
        
        <div class="questao">
          <div class="title-quest">
            Qual resultado dessa condição?
          </div>
          <div class="opcoes">
            <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn5">
              <img src="../img/a.png">
              <p>"Você pode continuar."</p>
            </div>
            <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn7">
              <img src="../img/b.png">
              <p>"Vermelho"</p>
            </div>
            <div class="opcao" onclick="certa('btn6', 'btn5', 'btn7', 'btn8')" id="btn6">
              <img src="../img/c.png">
              <p>"Você deve parar!"</p>
            </div>
            <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn8">
              <img src="../img/d.png">
              <p>"Você não tem habilitação."</p>
            </div>
          </div>
        </div>
      </div>

      <div class="divsLadoaLado">
        
        <div class="personagem">
          <img src="../img/cond3.png">
        </div>
        
        <div class="questao">
          <div class="title-quest">
            Qual resultado dessa condição?
          </div>
          <div class="opcoes">
            <div class="opcao" onclick="certa('btn5', 'btn6', 'btn7', 'btn8')" id="btn5">
              <img src="../img/a.png">
              <p>"Você precisa levar uma guarda-chuva!"</p>
            </div>
            <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn7">
              <img src="../img/b.png">
              <p>"Está chovendo."</p>
            </div>
            <div class="opcao" onclick="errada('btn6', 'btn5', 'btn7', 'btn8')" id="btn6">
              <img src="../img/c.png">
              <p>"Você vai precisar de um guarda chuva!"</p>
            </div>
            <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn8">
              <img src="../img/d.png">
              <p>"Você não precisa levar nada."</p>
            </div>
          </div>
        </div>
      </div>


      <div class="divsLadoaLado">
        
        <div class="personagem">
          <img src="../img/cond4.png">
        </div>
        
        <div class="questao">
          <div class="title-quest">
            Qual resultado dessa condição?
          </div>
          <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn7">
            <img src="../img/a.png">
            <p>"Está chovendo."</p>
          </div>
          <div class="opcao" onclick="errada('btn6', 'btn5', 'btn7', 'btn8')" id="btn6">
            <img src="../img/b.png">
            <p>"Você vai precisar de um guarda chuva!"</p>
          </div>
          <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn8">
            <img src="../img/c.png">
            <p>"Você não precisa levar nada."</p>
          </div>
          <div class="opcoes">
            <div class="opcao" onclick="certa('btn5', 'btn6', 'btn7', 'btn8')" id="btn5">
              <img src="../img/d.png">
              <p>"Você precisa levar uma guarda-chuva!"</p>
            </div>
          </div>
        </div>
      </div>
        
</body>
</html>