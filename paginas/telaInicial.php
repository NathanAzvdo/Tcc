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
  <link rel="styleshet" href="../css/jogos.css">
  
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

    <div class="title-rank">
      <h1>Ranking <img src="../img/trofeu-removebg-preview.png" alt="" width="50px" height="50px"></h1>
  </div>
  
  <div class="center" style="margin-top:5%;">
    
  <div class="topTres">
      <div class="first">
        <div id="first">
        <img src="../img/brilhoprim.png" style="width:80px; transform: scaleX(-1);">
        <img src="../img/primeiro-removebg-preview.png">
        <img src="../img/brilhoprim.png" style="width:80px;"><br>
        </div>  
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
</div>
  
<div class="ag-format-container" id="jogosDiv">
  <div class="ag-courses_box">
  <?php
        
        session_start();
        include_once('config.php');
        $email = $_SESSION['email'];
        
        // Executa a consulta SQL
        $sql = "SELECT nivel FROM cadastro WHERE email = '{$email}'";
        $resultado = mysqli_query($conexao, $sql);
        
        if (!$resultado) {
            die("Erro na consulta: " . mysqli_error($conexao));
        }
        
        // Obtém o valor retornado pela consulta
        if ($linha = mysqli_fetch_assoc($resultado)) {
            $nivel = $linha['nivel'];
        }
       
        if ($nivel >=0 ) {
          echo '<div class="ag-courses_item">
          <a href="Visualg.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
            introdução ao VisualG
            </div>
          </a>
        </div>
        
        <div class="ag-courses_item">
                <a href="variaveis.php" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">
                  Váriaveis
                  </div>
                </a>
        </div>';
        }

        if ($nivel >= 1) {
          echo '<div class="ag-courses_item">
          <a href="comandoEnt.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
              Comandos de entrada e Operadores
            </div>

          </a>
        </div>';
        }
        else{
          echo '<div class="ag-courses_item" style="opacity:0.3; pointer-events:none;">
          <div class="ag-courses-item_link" style="pointer-events:none;">
            <div class="ag-courses-item_bg" style="pointer-events:none;"></div>

            <div class="ag-courses-item_title">
              Comandos de entrada e Operadores
            </div>

          </div>
        </div>';
        }

        if ($nivel >= 2) {
            echo '<div class="ag-courses_item">
            <a href="estCond.php" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>

              <div class="ag-courses-item_title">
                Estruturas Condicionais
              </div>
            </a>
          </div>';
        }
        else{
          echo '<div class="ag-courses_item" style="opacity:0.3; pointer-events:none;">
          <div class="ag-courses-item_link" style="pointer-events: none;">
            <div class="ag-courses-item_bg" style="pointer-events: none;"></div>

            <div class="ag-courses-item_title">
              Estruturas Condicionais
            </div>
          </div>
        </div>';
        }
        if($nivel >=3){
          echo '<div class="ag-courses_item">
          <a href="estRep.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
              Estruturadas de Repetição
            </div>
          </a>
        </div>';
        }
        else{
          echo '<div class="ag-courses_item" style="pointer-events: none; opacity:0.3;">
          <div class="ag-courses-item_link" style="pointer-events: none;">
            <div class="ag-courses-item_bg" style="pointer-events: none;"></div>

            <div class="ag-courses-item_title">
              Estruturadas de Repetição
            </div>
          </div>
        </div>';
        }
        if($nivel>=4){
          echo' <div class="ag-courses_item">
          <a href="func.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
              Procedimentos e Funções
            </div>
          </a>
        </div>';
        }
        else{
          echo' <div class="ag-courses_item" style="opacity:0.3; pointer-events:none;">
          <div class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
              Procedimentos e Funções
            </div>
          </div>
        </div>';
        }
    
        if($nivel>=5){
          echo '<div class="ag-courses_item">
          <a href="Vetores.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
              Vetores
            </div>
          </a>
        </div>';
        }
        else{
          echo '<div class="ag-courses_item" style="opacity:0.3; pointer-events:none;">
          <div class="ag-courses-item_link" style="pointer-events:none;">
            <div class="ag-courses-item_bg" style="pointer-events:none;"></div>

            <div class="ag-courses-item_title">
              Vetores
            </div>
          </div>
        </div>';
        }
        if($nivel>=6){
          echo '<div class="ag-courses_item">
          <a href="Matrizes.php" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_title">
            Matrizes
            </div>
          </a>
        </div>';
        }
        else{
          echo '<div class="ag-courses_item" style="pointer-events:none; opacity:0.3;">
          <div class="ag-courses-item_link" style="pointer-events:none;">
            <div class="ag-courses-item_bg" style="pointer-events:none;"></div>

            <div class="ag-courses-item_title">
            Matrizes
            </div>
          </div>
        </div>';
        }
            
        
        mysqli_free_result($resultado);
        mysqli_close($conexao);
        
      ?>

            </div>
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