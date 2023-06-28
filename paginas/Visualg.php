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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/visualg.css">
    <link rel="icon" href="../img/icon.png">
    <title>CodeGenious - introdução</title>
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

    <h1 class="titulo">INTRODUÇÃO
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
        <p>O aplicativo Visualg é uma ferramenta de programação que permite aos usuários escrever, editar e executar
        algoritmos utilizando a linguagem de programação Portugol. Ele é usado principalmente para aprender os conceitos
        básicos de programação, como estruturas condicionais, laços de repetição e manipulação de dados.</p>
        <br>
        <p>O Visualg possui uma interface gráfica simples e intuitiva, facilitando o processo de criação de algoritmos. Os
        usuários podem escrever seu código, inserir variáveis, comandos e operações matemáticas, e em seguida executar o
        programa para ver o resultado. <br>
    obs:A estrtutura do codigo inteira, será explicada ao decorrer do projeto.</p></div>

    <div style="text-align:center;">
        <div class="subtitulo">Algoritmo:</div>
    </div>

    <div class="paragrafo">
        <p>Dentro do Visualg, um "algoritmo" é um conjunto de instruções ou passos que descrevem uma sequência lógica de
        ações a serem executadas. É como uma receita de bolo, onde você tem uma série de etapas para seguir a fim de
        alcançar um determinado resultado.</p>
<br>
        <p>No contexto do Visualg, você escreve um algoritmo para resolver um problema específico ou executar uma tarefa
        desejada. Os algoritmos podem envolver cálculos matemáticos, tomadas de decisão, repetição de ações e
        manipulação de dados.</p>
        <br>
        <p>Cada algoritmo no Visualg começa com a palavra reservada "Algoritmo" seguida de um nome que você escolhe para
        identificá-lo. Em seguida, você escreve as instruções do algoritmo linha por linha, indicando quais ações devem
        ser executadas em cada etapa.</p>
        <br>
        <p>Por exemplo, um algoritmo simples para somar dois números seria:</p>
    </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo Soma</p>
        <br>
        <br>
        <p class="sessoes">Var</p> <br>
        <p class="codigo"> num1, num2, soma: inteiro </p>
        <br><br><br>
        <p class="sessoes">Inicio</p> <br>
        <p class="codigo">Escreva("Digite o primeiro número:")
            Leia(num1)</p>
        <br><br>
        <p class="codigo">Escreva("Digite o segundo número:")
            Leia(num2)
            <br><br><br>
            soma <- num1 + num2</p>
                <br><br><br>

                <p class="codigo">Escreva("A soma dos números é: ", soma)</p>
                <br><br><br>
                <p class="sessoes" style="padding-bottom:10px;">FimAlgoritmo</p>
    </div>
    <div class=paragrafo>
        <p>Nesse exemplo, o algoritmo solicita que o usuário digite dois números, realiza a soma desses
        números e exibe o resultado.</p>
        <br>

        <p>Os algoritmos são uma parte fundamental da programação, pois ajudam a organizar as etapas necessárias para
        resolver um problema. No Visualg, você pode criar e testar diferentes algoritmos, desenvolvendo suas habilidades
        de resolução de problemas e lógica de programação.</p> <br>

    </div>
    <div class="subtitulo">Var:</div>

    <div class="paragrafo">
        <p>No Visualg, a palavra reservada "Var" é usada para declarar variáveis. Uma variável é uma área de memória que
        armazena um valor, como um número ou um texto, e pode ser alterada durante a execução do programa.</p>
        <br>
        <p>Quando você usa a palavra "Var" seguida por um ou mais nomes de variáveis, você está informando ao Visualg quais
        são as variáveis que você vai utilizar no seu algoritmo.</p>
        <br>
        <p>Vamos ver alguns exemplos simples:</p>
        <br>
        <p>Exemplo 1:</p>
    </div>
    <br><br>
    <div class="exemplo">
        <p class="sessoes">Algoritmo Exemplo</p>
        <br><br>
        <p class="sessoes">Var</p><br>
        <p class="codigo"> nome: caractere<br>
        <p class="codigo">idade: inteiro</p>

        <p class="sessoes">Inicio</p>
        <p class="codigo">nome <- "João" <br>
        <p class="codigo"> idade <- 25 <br><br>
        <p class="codigo">Escreva("Olá, meu nome é ", nome, " e eu tenho ", idade, " anos.")</p>

        <p class="sessoes">FimAlgoritmo</p>
                       
    </div>

    <div class="paragrafo">
        <p>Neste exemplo, usamos a palavra "Var" para declarar duas variáveis: "nome" e "idade". A variável "nome" é do
        tipo "caractere" e armazena texto, enquanto a variável "idade" é do tipo "inteiro" e armazena números inteiros.
        Em seguida, atribuímos valores a essas variáveis e as utilizamos para exibir uma mensagem na tela.</p>
        <br>
        <p>Exemplo 2:</p>
    </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo Calculadora</p>
        <br><br>
        <p class="sessoes">Var</p><br>
        <p class="codigo"> num1, num2, soma: inteiro</p>
        <br><br>
        <p class="sessoes">Inicio</p>
        <p class="codigo">num1 <- 5<br>
                num2 <- 3<br>
                    <br><br>
                    soma <- num1 + num2 <br><br>
                        Escreva("A soma de ", num1, " e ", num2, " é ", soma)</p>
        <br><br>
        <p class="sessoes">FimAlgoritmo</p>
    </div>

    <div class="paragrafo">
        <p>Neste exemplo, declaramos três variáveis: "num1", "num2" e "soma", todas do tipo "inteiro".
        Em seguida, atribuímos valores aos dois primeiros números e realizamos a soma, armazenando o resultado na
        variável "soma". Por fim, exibimos a mensagem com o resultado da soma.</p>
        <br>
        <p>A declaração de variáveis usando a palavra reservada "Var" no Visualg é importante para informar ao programa
        quais serão as variáveis utilizadas e qual o tipo de dado que elas irão armazenar. Isso permite que o programa
        aloque a quantidade correta de memória para cada variável e possa manipulá-las adequadamente durante a execução
        do algoritmo.</p>
    </div>

    <div class="subtitulo">Inicio:</div>
    <div class="paragrafo">
        <p>No Visualg, a palavra reservada "Inicio" marca o início do bloco principal do seu algoritmo.
        É dentro desse bloco que você escreve as instruções que serão executadas sequencialmente.</p>
        <br>
        <p>O bloco "Inicio" indica ao Visualg que as instruções subsequentes devem ser executadas em ordem, da primeira até
        a última. Ele delimita o escopo principal do seu algoritmo, onde a maioria das ações acontece.</p>
        <br>
        <p>Vejamos alguns exemplos simples para entender melhor:</p>
        <br>
        <p>Exemplo 1:</p>
    </div>
    <div class="exemplo">
        <p class="sessoes"> Algoritmo Saudacao</p>
        <br><br>
        <p class="sessoes"> Inicio</p>
        <br>
        <p class="codigo">Escreva("Olá! Bem-vindo ao Visualg.") <br>
            Escreva("Este é um exemplo de saudação.")</p>
        <br><br>
        <p class="sessoes"> FimAlgoritmo</p>
    </div>
    <div class="paragrafo">
        <p>Neste exemplo, dentro do bloco "Inicio", temos duas instruções "Escreva". Elas serão
        executadas em ordem, uma após a outra. Ao executar o algoritmo, ele imprimirá as mensagens "Olá! Bem-vindo ao
        Visualg." e "Este é um exemplo de saudação." na tela.</p>
        <br>
        <p>Exemplo 2:</p>
    </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo Calculadora
        <br><br>  
        <p>Var</p> <br>  
        <p class="codigo">num1, num2, soma: inteiro</p>
        <br><br>  
        <p class="sessoes">Inicio</p>
        <p class="codigo"> num1 <- 5 <br>
        num2 <- 3 <br><br>

        soma <- num1 + num2
        <br><br>  
        Escreva("A soma de ", num1, " e ", num2, " é ", soma)
        <br><br>  
        Escreva("Fim do programa.")</p>
        <p class="sessoes">FimAlgoritmo</p>
      
    </div>

    <div class="paragrafo">
        <p>Neste exemplo, também temos o bloco "Inicio" contendo uma sequência de instruções. As variáveis "num1" e "num2" recebem valores, e em seguida, realizamos a soma desses números e armazenamos o resultado na variável "soma". Depois, exibimos a mensagem com o resultado da soma. Por fim, escrevemos "Fim do programa." na tela.</p>
        <br>
        <p>O bloco "Inicio" é fundamental para definir a sequência de execução das instruções dentro do seu algoritmo. É a partir dele que o programa começa a executar as ações descritas, passo a passo, até alcançar o final do bloco ou encontrar uma instrução que altere o fluxo, como uma estrutura condicional ou um laço de repetição.</p>
    </div>

    <div class="subtitulo">FimAlgoritmo:</div>
    <div class="paragrafo">
        <p>No Visualg, a palavra reservada "FimAlgoritmo" marca o fim do bloco principal do seu algoritmo. É dentro desse bloco que você escreve as instruções que serão executadas sequencialmente.</p>
        <br>
        <p>O bloco "FimAlgoritmo" indica ao Visualg que não há mais instruções para serem executadas no escopo principal do algoritmo. Ele encerra o bloco principal e sinaliza o fim do programa.</p>
    </div>
    <div class="paragrafo">
        <a href="https://visualg3.com.br/baixar-o-visualg3-0/" target="_blank">Baixe o Visualg</a>
    </paragrafo>

    <div class="btnjog">
        <a href="variaveis.php"><button id="btnjog">Próximo Módulo-></button></a>
    </div>
</body>

</html>