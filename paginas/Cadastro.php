
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>

  <header>
    <nav>
      <a class="logo" href="../index.html">CodeGenious</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li><a href="#">Jogos</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
      </ul>
    </nav>
  </header>
  <script src="js/menu.js"></script>
    
  

    <div class="title">Faça seu cadastro:</div>
    <div class="center">
      <div class="form">
        <form action="cad.php" method="POST">
          <label for="nome">Informe o nome de Usuário:</label><br>
          <input type="text" name="nome"><br>
          <label for="email">Informe o email:</label><br>
          <input type="email" name="email"><br>
          <label for="senha">Informe a senha:</label><br>
          <input type="password" name="senha"><br>
          <label for="Confsenha">Informe a senha:</label><br>
          <input type="password" name="Confsenha"><br>
          <div style="text-align:center;">
          <input type="submit" value="enviar" id="btn">
          </div>
        </form>
      </div>
      <div class="img">
        <img src="../img/2-removebg-preview-removebg-preview.png">
      </div>
    
    </div>
      

    
        
</body>
</html>
