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


  <title>CodeGenious - Variáveis</title>

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
  <div class="titulo">Jogo 01
    <div><img src="../img/jogo-removebg-preview .png"></div>

  </div>
  <div class="divsLadoaLado">
    <div class="anima3">

      <div class="personagem">
        <img src="../img/maria.png">
      </div>
    </div>

      <div class="questao">
        <div class="anima2">

          <div class="title-quest">
            <b>Qual váriavel maria deve usar?</b>
          </div>
          <div class="opcoes">
            <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn1">
            <img src="../img/a.png">
            <p>Caractere</p>
          </div>
          <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn2">
            <img src="../img/b.png">
            <p>Real</p>
          </div>
          <div class="opcao" onclick="certa('btn3', 'btn1', 'btn2', 'btn4')" id="btn3">
            <img src="../img/c.png">
                <p>Inteiro</p>
              </div>
              <div class="opcao" onclick="errada('btn1', 'btn2', 'btn3', 'btn4')" id="btn4">
                <img src="../img/d.png">
                <p>Lógico</p>
              </div>
            </div>
          </div>
        </div>
          
        </div>
      </div>
    
    

      <div class="divsLadoaLado">
        
      <div class="personagem">
        <img src="../img/joao.png">
      </div>
      
      <div class="questao">
        <div class="title-quest">
          Qual váriavel joão deve usar?
        </div>
        <div class="opcoes">
          <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn5">
            <img src="../img/a.png">
            <p>Caractere</p>
          </div>
          <div class="opcao" onclick="certa('btn6', 'btn5', 'btn7', 'btn8')" id="btn6">
            <img src="../img/b.png">
            <p>Real</p>
          </div>
          <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn7">
            <img src="../img/c.png">
            <p>Inteiro</p>
          </div>
          <div class="opcao" onclick="errada('btn5','btn6', 'btn7', 'btn8')" id="btn8">
            <img src="../img/d.png">
            <p>Lógico</p>
          </div>
        </div>
      </div>
    </div>
      
    

    <div class="divsLadoaLado">
      
      <div class="personagem">
        <img src="../img/vera.png">
      </div>
      
      <div class="questao">
        <div class="title-quest">
          Qual váriavel Vera deve usar?
        </div>
        <div class="opcoes">
          <div class="opcao" id="btn9" onclick="certa('btn9', 'btn10', 'btn11', 'btn12')">
            <img src="../img/a.png">
            <p>Caractere</p>
          </div>
          <div class="opcao" id="btn10" onclick="errada('btn9', 'btn10', 'btn11', 'btn12')">
            <img src="../img/b.png">
            <p>Real</p>
          </div>
          <div class="opcao" id="btn11" onclick="errada('btn9', 'btn10', 'btn11', 'btn12')">
            <img src="../img/c.png">
            <p>Inteiro</p>
          </div>
          <div class="opcao" id="btn12" onclick="errada('btn9', 'btn10', 'btn11', 'btn12')">
                <img src="../img/d.png">
                <p>Lógico</p>
            </div>
        </div>
      </div>
    </div>
  
    
    <script src="../js/jogo1.js"></script>
    <script>
      function pont(){
    if(cont>=3){
        const div = document.getElementById('cinco-estrelas');
        div.style.display="flex";
    }
    if(cont==2){
        const div = document.getElementById('tres-estrelas');
        div.style.display="flex";
    }
    if(cont==1 || cont==0){
        const div = document.getElementById('uma-estrela');
        div.style.display="flex";
    }
}
    </script>
    <div class="btnEnviar"><button onclick="pont()">Enviar</button></div>
    
    <div id="cinco-estrelas">
      <form  action="jogo1.php" method="POST">
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
      <form  action="jogo1.php" method="POST">
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
      <form action="jogo1.php" method="POST">
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