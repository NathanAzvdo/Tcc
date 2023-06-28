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
    <link rel="stylesheet" href="../css/visualg.css">
    <link rel="icon" href="../img/icon.png">
    <title>CodeGenious - Função-Procedimentos</title>
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

    <h1 class="titulo">Vetores
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>
    
    <div class="paragrafo">
<p>No Visualg, um vetor é uma estrutura de dados que permite armazenar múltiplos valores em uma única variável. É como uma lista onde cada elemento possui uma posição única, chamada de índice. Os vetores são muito úteis quando precisamos trabalhar com conjuntos de dados relacionados, como uma lista de nomes, notas de alunos, valores numéricos, entre outros.</p> <br>
<p>Vamos supor que queremos armazenar as notas de cinco alunos. Podemos criar um vetor chamado "notas" para isso. A declaração de um vetor é feita indicando o nome do vetor, seguido do tamanho entre colchetes. Veja o exemplo: <br>
obs: o caractere "//" é utilizado como forma de comentario, ou seja, não terá influencia no código </p>
</div>

<div class="exemplo">
       
       
   
    <p class="codigo">algoritmo "Exemplo de Vetores"</p> 
    <br>
    <p class="codigo">var</p>
    <br>    
    <p class="sessoes"> notas: vetor[1..5] de real</p>  <br>   
    <p class="codigo"> inicio</p> <br>
    <p class="sessoes">  // Atribuindo valores às posições do vetor</p>  <br> 
    <p class="sessoes"> notas[1] <- 7.5</p>  <br> 
    <p class="sessoes"> notas[2] <- 8.0</p>  <br> 
    <p class="sessoes"> notas[3] <- 6.5</p>  <br> 
    <p class="sessoes"> notas[4] <- 9.0</p>  <br> 
    <p class="sessoes"> notas[5] <- 7.0</p>  <br> <br>

    <p class="sessoes">  // Exibindo as notas armazenadas no vetor</p>
    <p class="sessoes">  escreva("Notas dos alunos: ")</p>
    <p class="sessoes">  para i de 1 ate 5 faca</p>
    
    <p class="sessoes">   escreva(notas[i], " ")</p>
    <p class="sessoes">   fimpara</p>
    <p class="codigo">fimalgoritmo</p> 
</div>

    <div class="paragrafo">
        <p>Neste exemplo, declaramos um vetor chamado "notas" que possui cinco elementos, indexados de 1 a 5. Em seguida, atribuímos valores às posições do vetor, representando as notas dos cinco alunos. Utilizamos a sintaxe notas[posicao] <- valor para atribuir um valor a uma posição específica do vetor.</p> <br>

    <p>Em seguida, usamos um laço de repetição 'para' para percorrer cada posição do vetor e exibir as notas armazenadas. O laço começa na posição 1 e vai até a posição 5, exibindo cada elemento do vetor utilizando 'notas[i]', onde i representa o índice atual.</p> <br>
        
    <p>Ao executar o programa, você verá a seguinte saída:</p>
    </div>

    <div class="exemplo"><p class="codigo"> Notas dos alunos: 7.5 8.0 6.5 9.0 7.0</p></div>
    <div class="paragrafo">
    <p>Os vetores são úteis quando precisamos manipular conjuntos de dados de maneira organizada. Podemos acessar, modificar e percorrer facilmente os elementos do vetor utilizando os índices.</p> <br>

    <p>Além disso, é importante lembrar que os índices em um vetor sempre começam em 1 e vão até o tamanho do vetor. No exemplo acima, o vetor possui 5 elementos, portanto, os índices vão de 1 a 5.</p><br>

        
    <p>  Os vetores podem ser utilizados em uma variedade de situações, como armazenar valores de sensores, gerenciar informações de alunos em uma sala de aula, entre outros casos em que há a necessidade de trabalhar com múltiplos dados relacionados.</p> <br></div>

   
  
    <div class="btnjog">
        <a href="vetJogo.php"><button id="btnjog">Jogar</button></a>
    </div>
    
</body>

</html>

