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
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Sobre nós</a></li>
        <li><a href="#">Teste</a></li>
      </ul>
    </nav>
  </header>
  <script src="js/menu.js"></script>
    
  
  <div class="title">Login</div>
  <div class="center">
      <form action="log.php" method="POST">
      <input type="text" name="email" placeholder="Informe o Email"><br>
      <input type="password" name="senha" placeholder="Informe a senha"><br>
      <div style="text-align:center">
      <input type="submit" name="submit" value="Logar" id="btn"><br>
      <a href="Cadastro.php">Cadastre-se aqui</a>
      </div>
      </form>
      


    </div>
        
    
        
</body>
</html>