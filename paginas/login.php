<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeGenious</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" href="../img/icon.png">
</head>
<body>

  <header>
    <nav>
      <a class="logo" href="../telaPrinc.php">CodeGenious</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
      </ul>
    </nav>
  </header>
  <script src="../js/menu.js"></script>
    
  
 
    <div class="centerLog">

      <div class="florCanto">
        <img src="../img/flor.png">
      </div>
    
      <div class="logcenter">
        <div class="title">Fazer login</div><br>
        <form action="log.php" method="POST">
          <label for="email" id="Lemail">Email:</label><br>
          <input type="email" name="email" id="email"><br>
          <label for="nome">Senha:</label><br>
          <input type="password" name="senha" id="senha"><br>
          <div style="text-align:center">
          <div id="display">
            <?php
            if (isset($_GET['erro'])) {
               if ($_GET['erro'] == "dadoserrado") {
                 echo "Login inválido!"; }
               }
            ?>
          </div>  
          <input type="submit" name="submit" value="Logar" id="btn"><br>
            <a href="Cadastro.php">Cadastre-se aqui</a>
          </div>
        </form>
      </div>

      <div class="roboEsq">
        <img src="../img/roboCanto.jpeg">
      </div>
    </div>
      

    </div>
      


        
    
        
</body>
</html>