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
    
  

  <div class="center">
    <div class="form">
        <div class="title">Faça seu cadastro:</div>
        <form action="cad.php" method="POST">
          <label for="nome">Nome de Usuário:</label><br>
          <input type="text" name="nome" id="nome" maxLength="50"><br>
          <label for="email">Email:</label><br>
          <input type="email" name="email" id="email" oninput="validarEmail()"><br>
          <label for="senha">Senha:</label><br>
          <input type="password" name="senha" id="senha" oninput="validarSenha()"><br>
          <label for="Confsenha">Confirme a senha:</label><br>
          <input type="password" name="confsenha" id="confsenha" oninput="validarSenha()"><br>
          <div style="text-align:center;">
            <div id="display">
            <?php
            if (isset($_GET['erro'])) {
               if ($_GET['erro'] == "email") {
                 echo "Email já utilizado"; }
               }
            if (isset($_GET['erro'])) {
              if ($_GET['erro'] == "nome") {
                  echo "Nome de usuário já utilizado"; }
                }
            ?>
            </div>
          <button type="submit" value="enviar" id="btn">Enviar</button>
          </div>
        </form>
        <script src="../js/validacao.js"></script>
      </div>
      <div class="img">
        <img src="../img/roboLupa.png">
        
      </div>
    
    </div>
      

    
        
</body>
</html>
