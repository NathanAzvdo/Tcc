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
    <title>CodeGenious - Váriaveis</title>
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
      
      <h1 class="titulo">Váriaveis
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
        <p>Uma variável é como uma caixinha onde você pode guardar um valor. Essa caixinha tem um nome (que você escolhe) e um conteúdo (o valor que você coloca dentro dela). Assim, você pode usar esse nome para se referir ao valor armazenado na caixinha sempre que precisar.</p>
        <br>
        <p>Imagine que você está escrevendo um programa no Visualg, que é uma linguagem de programação simples. Nesse programa, você vai precisar armazenar informações temporárias, como um número ou um texto, para usar em diferentes partes do seu código. É aí que as variáveis entram em cena!</p></div>

    <h1 class="subtitulo">Tipos de variáveis:</h1>

    <div class="paragrafo">
        <p>No Visualg, existem três tipos de variáveis principais: inteiro, real e caractere (ou string). Vamos explicar cada um deles:.</p>
        
        <p class="subText">› Inteiro:</p>

            <p>As variáveis inteiras são usadas para armazenar números inteiros, ou seja, números sem parte decimal. Elas podem representar valores positivos, negativos ou zero. Para declarar uma variável como inteiro, você utiliza a palavra-chave inteiro seguida do nome da variável. Por exemplo: <br><br></p>

        <p class="subText">› Real:<br></p>
            <p>As variáveis reais são usadas para armazenar números com parte decimal. Elas podem representar valores positivos, negativos ou zero, incluindo números fracionários. Para declarar uma variável como real, você utiliza a palavra-chave real seguida do nome da variável. Por exemplo: <br><br></p>
        <p class="subText">› Caractere (ou String):<br></p>
            <p>As variáveis do tipo caractere são usadas para armazenar textos, como palavras, frases ou sequências de caracteres. Elas são representadas entre aspas duplas (" "). Para declarar uma variável como caractere, você utiliza a palavra-chave caractere seguida do nome da variável. Por exemplo: <br><br></p>

            <p>Além desses três tipos básicos, o Visualg também possui outros tipos de variáveis, como lógico (verdadeiro ou falso), vetor (conjunto de elementos do mesmo tipo) e matriz (conjunto de elementos organizados em linhas e colunas). </p>
    </div>
    <br>
    <div style="text-align:center;">
    <h1 class="subtitulo">Utilizando uma váriavel:</h1>
    </div>

    <div class="paragrafo"><p>Digamos que você queira fazer um programa que calcule a soma de dois números digitados pelo usuário. Você pode criar duas variáveis chamadas "numero1" e "numero2". Esses nomes são escolhidos por você, então poderiam ser qualquer coisa que faça sentido para o que você está fazendo.</p> 
        <br>
    <p>No início do programa, você pode pedir ao usuário para digitar um número e guardar esse valor na variável "numero1". Em seguida, você pede para o usuário digitar outro número e guarda esse valor na variável "numero2". Agora, você tem os dois números guardados em caixinhas separadas.</p>
    <br>
    <p>Em seguida, você pode criar uma nova variável chamada "soma" para armazenar o resultado da soma desses dois números. Para fazer isso, você pode simplesmente atribuir à variável "soma" o valor de "numero1" somado a "numero2". Por exemplo, poderia ser algo como: "soma <- numero1 + numero2". Agora, o valor da soma está guardado na variável "soma".</p>
    <br>
    <p>Por que usar variáveis em vez de simplesmente usar os valores diretamente? Bem, as variáveis fornecem uma forma de armazenar e manipular dados de maneira mais flexível. Você pode reutilizar esses valores em diferentes partes do seu código, sem precisar digitar o número novamente. Além disso, se você precisar alterar o valor, basta alterar o conteúdo da variável, em vez de ter que procurar em todo o código onde esse valor é usado.</p>
    <br>
    <p>No Visualg, é necessário declarar as variáveis antes de usá-las. Isso significa que você precisa informar ao programa o nome e o tipo da variável antes de começar a utilizá-la. Por exemplo, se você deseja usar uma variável chamada "idade" para armazenar a idade de uma pessoa, você precisa declará-la como um número inteiro no início do programa.</p></div>

    <div style="text-align:center;">
        <h1 class="subtitulo">Exemplo:</h1>
        </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo variáveis</p>
        <br>
        <p class="sessoes">Var</p> <br>
        <p class="codigo">  numero1, numero2, soma: inteiro</p>
        <br><br>
        <p class="sessoes">Inicio</p> <br>
        <p class="codigo"> Escreva("Digite o primeiro número: ")
            Leia(numero1)</p>
        <br>
        <p class="codigo">Escreva("Digite o segundo número:")>
        Leia(numero2)
            <br><br><br>
            soma <- numero1 + numero2</p>
                <br><br>

                <p class="codigo">Escreva("A soma dos números é: ", soma)</p>
                <br><br><br>
                <p class="sessoes" style="padding-bottom:10px;">FimAlgoritmo</p>
    </div>
    <div class=paragrafo>
    Nesse exemplo, o programa começa declarando as variáveis numero1, numero2 e soma como do tipo inteiro usando a palavra-chave Var.
        
    Em seguida, o programa solicita ao usuário que digite o primeiro número e armazena o valor na variável numero1 usando o comando Leia.
        
    Depois, o programa solicita ao usuário que digite o segundo número e armazena o valor na variável numero2 também usando o comando Leia.
        
    A seguir, o programa calcula a soma dos dois números digitados pelo usuário e armazena o resultado na variável soma usando o operador de adição +.
        
     Por fim, o programa exibe a mensagem "A soma dos números é: " seguida do valor da variável soma usando o comando Escreva.</p>
    </div>
    
    <div class="btnjog">
        <a href="variaveisJogo.php"><button id="btnjog">Jogar</button></a>
    </div>
</html> 
</body>
