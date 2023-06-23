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
    <title>CodeGenious - Comando D Entradas E Operadores</title>
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
      <h1 class="titulo">COMANDO DE ENTRADAS E OPERADORES
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
        <p>Os comandos de entrada e operadores são elementos fundamentais na programação. Eles nos permitem interagir com o usuário, obter dados e realizar operações matemáticas ou lógicas.</p></div>

    <div style="text-align:center;">
        <div class="subtitulo">Comando de entrada</div>
    </div>

    <div class="paragrafo">
        <p>Vamos começar pelos comandos de entrada. No Visualg, o principal comando de entrada é o Leia. Esse comando é usado para solicitar ao usuário que digite um valor, que pode ser um número ou um texto, e armazená-lo em uma variável para ser usado posteriormente no programa.

        Por exemplo, se você quiser pedir ao usuário que digite seu nome e armazená-lo em uma variável chamada nome, você pode usar o seguinte comando:</p>
        <div class="exemplo">
         <p class="codigo">Leia(nome)</p>
        </div>
        <p>Assim, o usuário poderá digitar seu nome e o valor será armazenado na variável nome.

            Já os operadores são símbolos especiais que nos permitem realizar diversas operações, como aritméticas e lógicas, entre valores e variáveis.</p></div>
            <div style="text-align:center;">
          
      </p></div>
    </div>
    <div style="text-align:center;">
    <div class="subtitulo">Operadores aritméticos:</div>
    </div>
    <div class="paragrafo">
    Vamos começar pelos operadores aritméticos mais comuns:

    O operador de adição (+) é usado para somar dois valores ou variáveis. Por exemplo:</div>
    
    
    <div class="exemplo"><p class="codigo">   soma <- numero1 + numero2</p></div></p></div>
    <div class="paragrafo">O operador de subtração (-) é usado para subtrair um valor de outro. Por exemplo:</div>
    
   
    <div class="exemplo"><p class="codigo">  diferenca <- numero1 - numero2</p></div>
    <div class="paragrafo"> O operador de multiplicação (*) é usado para multiplicar dois valores ou variáveis. Por exemplo:</div>
    
  
    <div class="exemplo"><p class="codigo">   produto <- numero1 * numero2</p></div>
    <div class="paragrafo"> O operador de divisão (/) é usado para dividir um valor por outro. Por exemplo:</div>
    
  
 <div class="exemplo"> <p class="codigo">  quociente <- numero1 / numero2</p></div>

 <div class="paragrafo"><p>Além desses, existem outros operadores aritméticos, como o operador de resto (%) para obter o resto de uma divisão inteira, o operador de incremento (++) para aumentar o valor de uma variável em 1, e o operador de decremento (--) para diminuir o valor de uma variável em 1.</p>
</div>   
 <div style="text-align:center;"> <br>
    <div class="subtitulo">Operadores Relacionais:</div></div> 
    <br>
    <div class="paragrafo"><p><br>Agora, vamos aos operadores relacionais, que são usados para realizar operações de comparação e retornar um valor lógico (verdadeiro ou falso):
    
     O operador de igualdade (=) é usado para verificar se dois valores são iguais. Por exemplo:</p></div>
    
    <div class="exemplo">
    <p class="sessoes">se numero1 = numero2 entao</p>
    <p class="codigo">  escreva("Os números são iguais!")</p>
    <p class="sessoes">fimse</p></div>
    <div class="paragrafo"> O operador de diferença (<>) é usado para verificar se dois valores são diferentes. Por exemplo:</div>
    
    <div class="exemplo">
    <p class="sessoes">se numero1 <> numero2 entao</p>
    <p class="codigo">   escreva("Os números são diferentes!")</p>
    <p class="sessoes"> fimse</p></div>
    <div class="paragrafo">  O operador de maior que (>) é usado para verificar se um valor é maior que outro. Por exemplo:</div>
    
    <div class="exemplo">
    <p class="sessoes">se numero1 > numero2 entao</p>
    <p class="codigo">  escreva("O primeiro número é maior!")</p>
    <p class="sessoes">fimse</p></div>
    <div class="paragrafo"> O operador de menor que (<) é usado para verificar se um valor é menor que outro. Por exemplo:</div>
    
    <div class="exemplo">
    <p class="sessoes"> se numero1 < numero2 entao</p>
    <p class="codigo"> escreva("O primeiro número é menor!")</p>
    <p class="sessoes"> fimse</p></div>

        <div class="paragrafo"> <p></p> Existem também os operadores de maior ou igual (>=) e menor ou igual (<=), que permitem verificar se um valor é maior ou igual a outro, ou se é menor ou igual a outro, respectivamente.</p></div> 

   <div style="text-align:center;">
    <div class="subtitulo">Operadores Logicos:</div>
    </div>
    <div class="paragrafo"> <p>Um operador lógico é um elemento utilizado na programação para combinar condições e avaliar expressões lógicas. Esses operadores permitem realizar operações de lógica booleana, retornando um valor verdadeiro ou falso com base nas condições analisadas.</p> <br>
        <p></p> Os operadores lógicos mais comuns são:</p> 
        <p> "E" (representado por "E" ou "&&"): Retorna verdadeiro se todas as condições forem verdadeiras. <br>
         "OU" (representado por "OU" ou "||"): Retorna verdadeiro se pelo menos uma das condições for verdadeira. <br> 
        "NÃO" (representado por "NÃO" ou "!"): Inverte o valor de uma condição, retornando verdadeiro se a condição for falsa e falso se a condição for verdadeira.</p>
        <br> 
</div>

    <div class="paragrafo"> Dessa forma, os operadores lógicos nos permitem criar expressões lógicas mais complexas e tomar decisões com base nas condições estabelecidas em nosso programa.</div>  

</html> 
</body>
