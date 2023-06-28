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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/visualg.css">
    <link rel="icon" href="../img/icon.png">
    <title>CodeGenious - Matrizes</title>
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

    <h1 class="titulo">Matrizes
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
<p>No Visualg, uma matriz é uma estrutura de dados bidimensional que permite armazenar valores em uma tabela ou grade. Ela é formada por linhas e colunas, onde cada elemento possui uma posição única identificada pelos índices das linhas e colunas. As matrizes são úteis quando precisamos trabalhar com dados organizados em forma de tabela, como uma planilha. </p>
<br>
<p>Vamos supor que queremos criar uma matriz para armazenar as notas de três alunos em duas disciplinas diferentes. Podemos representar essa matriz como uma tabela de 3 linhas por 2 colunas. A declaração de uma matriz é feita indicando o nome da matriz, seguido do número de linhas e colunas entre colchetes. Veja o exemplo:</p>
</div>

<div class="exemplo">
       
       
   
    <p class="codigo">algoritmo "Exemplo de Uso de Matrizes"</p> 
    <br>
    <p class="codigo">var</p>
    <br>    
    <p class="sessoes"> notas: matriz[1..3, 1..2] de real <br>
                        i, j: inteiro</p>  <br>   <br>
    <p class="codigo"> inicio</p> <br>
    <p class="sessoes">  // Atribuindo valores às posições da matriz</p>  <br> 
    <p class="sessoes"> notas[1,1] <- 7.5</p>  <br> 
    <p class="sessoes"> notas[1,2] <- 8.0</p>  <br> 
    <p class="sessoes"> notas[2,1] <- 6.5</p>  <br> 
    <p class="sessoes"> notas[2,2] <- 9.0</p>  <br> 
    <p class="sessoes"> notas[3,1] <- 7.0</p>  <br>
    <p class="sessoes"> notas[3,2] <- 7.5 </p>  <br> <br>

    <p class="sessoes">  // Exibindo as notas armazenadas na matriz</p>
    <p class="sessoes">  para i de 1 ate 3 faca</p>
    <p class="sessoes">  para j de 1 ate 2 faca</p>
    
    <p class="sessoes">    escreva("Nota do aluno ", i, " na disciplina ", j, ": ", notas[i, j])</p>
    <p class="sessoes">  escreval()</p>
    <p class="sessoes">  escreval()</p>
    <p class="sessoes">  fimpara</p>
    <p class="sessoes">  fimpara</p>
    <p class="codigo">fimalgoritmo</p> 
</div>

    <div class="paragrafo">
        <p>Neste exemplo, declaramos uma matriz chamada "notas" com 3 linhas e 2 colunas. Em seguida, atribuímos valores às posições da matriz, representando as notas dos alunos nas respectivas disciplinas.</p> <br>

    <p>Utilizamos dois laços de repetição 'para' para percorrer cada posição da matriz e exibir as notas armazenadas. O primeiro laço para percorre as linhas (de 1 a 3) e o segundo laço 'para' percorre as colunas (de 1 a 2). A variável 'i' representa a linha atual e a variável 'j' representa a coluna atual. Acessamos cada posição da matriz com notas'[i, j]'.</p> <br>
        
    <p>Ao executar o programa, você verá a seguinte saída:</p>
    </div>

    <div class="exemplo">
        <p class="codigo"> Nota do aluno 1 na disciplina 1: 7.5</p>
        <p class="codigo"> Nota do aluno 1 na disciplina 2: 8.0</p>
        <p class="codigo"> Nota do aluno 2 na disciplina 1: 6.5</p>
        <p class="codigo"> Nota do aluno 2 na disciplina 2: 9.0</p>
        <p class="codigo"> Nota do aluno 3 na disciplina 1: 7.0</p>
        <p class="codigo"> Nota do aluno 3 na disciplina 2: 7.5</p></div>
    <div class="paragrafo">
    <p>Dessa forma, utilizamos a matriz para armazenar e exibir as notas dos alunos em diferentes disciplinas de forma organizada, como uma tabela.</p> <br></div> 
  
    <div class="btnjog">
        <a href="jogoMatrizes.php"><button id="btnjog">Jogar</button></a>
    </div>
    
</body>

</html>

