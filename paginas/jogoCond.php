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
  if($nivel<2){
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
      <div class="personagem">
        <img src="../img/cond1.png">
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
          <div class="opcao" onclick="errada('btn9','btn10', 'btn11', 'btn12')" id="btn9">
            <img src="../img/a.png">
            <p>"Você está dirigindo."</p>
          </div>
          <div class="opcao" onclick="errada('btn9','btn10', 'btn11', 'btn12')" id="btn11">
            <img src="../img/b.png">
            <p>"Está chovendo."</p>
          </div>
          <div class="opcao" onclick="certa('btn10','btn9', 'btn11', 'btn12')" id="btn10">
            <img src="../img/c.png">
            <p>"Você precisa levar uma guarda-chuva!"</p>
          </div>
          <div class="opcao" onclick="errada('btn9','btn10', 'btn11', 'btn12')" id="btn12">
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
        <div class="opcoes">
          <div class="opcao" onclick="certa('btn13','btn14', 'btn15', 'btn16')" id="btn13">
            <img src="../img/a.png">
            <p>"Você é uma criança!"</p>
          </div>
          <div class="opcao" onclick="errada('btn13', 'btn14', 'btn15', 'btn16')" id="btn14">
            <img src="../img/b.png">
            <p>"Você pode brincar no parque!"</p>
          </div>
          <div class="opcao" onclick="errada('btn13','btn14', 'btn15', 'btn16')" id="btn15">
            <img src="../img/c.png">
            <p>"Você não pode brincar no parque."</p>
          </div>
          <div class="opcao" onclick="errada('btn13','btn14', 'btn15', 'btn16')" id="btn16">
            <img src="../img/d.png">
            <p>"Você é um adulto"</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
      function pont(){
    if(cont>=4){
        const div = document.getElementById('cinco-estrelas');
        div.style.display="flex";
    }
    else if(cont>=2){
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
      <form  action="jogo3.php" method="POST">
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
      <form  action="jogo3.php" method="POST">
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
      <form action="jogo3.php" method="POST">
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
