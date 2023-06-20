<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/visualg.css">
    <title>CodeGenious - Estruturas Condicionais</title>
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
          <li><a href="#">Jogos</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Teste</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    <script src="../js/menu.js"></script>

    <h1 class="titulo">Estruturas Condicionais
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
        <p>As estruturas condicionais são recursos fundamentais na programação que permitem tomar decisões com base em determinadas condições. Elas são como bifurcações no caminho do seu programa, onde você pode escolher diferentes ações com base em uma situação específica.</p><br>
        <p>Imagine que você está escrevendo um algoritmo no Visualg para simular um semáforo de trânsito. Dependendo da cor do semáforo, você precisa tomar ações diferentes. É aí que entram as estruturas condicionais.<br>
            <br>
            Em termos mais simples, você pode pensar nas estruturas condicionais como um "se... então... senão" dentro do seu código. Você verifica uma condição e, se essa condição for verdadeira, o programa executa uma ação específica. Caso contrário, se a condição não for verdadeira, você pode especificar outra ação alternativa.</p></div>

    <div style="text-align:center;">
        <div class="subtitulo">Tipos de estruturas condicionais:</div>
    </div>

    <div class="paragrafo">
        <p>Estrutura condicional "Se... Então":</p> <br>
        <br>
    <p>1. A estrutura condicional "Se... Então" é usada quando queremos executar um bloco de código apenas se uma condição for verdadeira. É como fazer uma pergunta e, se a resposta for sim, tomar uma ação específica. Vejamos um exemplo:</p>
    </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo MaiorNumero
        <br><br>  
        <p>Var</p> <br>  
        <p class="codigo">num1, num2: inteiro</p>
        <br><br>  
        <p class="sessoes">Inicio</p>
        <p class="codigo"> Escreva("Digite o primeiro número:") <br>
            Leia(num1)
            <br><br>
            Escreva("Digite o segundo número:")<br>
            Leia(num2) <br> <br>
            Se num1 > num2 Então
        <br>  <br>
        Escreva("O primeiro número é maior.")
        <br>
        FimSe<br> <br>
        Escreva("Fim do programa.")</p>
        <p class="sessoes">FimAlgoritmo</p></div>

        <div class="paragrafo">
        <p>Nesse exemplo, a estrutura condicional "Se num1 > num2 Então" verifica se o valor de "num1" é maior que o valor de "num2". Se essa condição for verdadeira, o programa exibirá "O primeiro número é maior.". Caso contrário, o programa não executará nada dentro do bloco condicional e seguirá para a próxima instrução.</p>
        <br><br>
        <p>2.Estrutura condicional "Se... Então... Senão": <br>
            A estrutura condicional "Se... Então... Senão" é usada quando queremos tomar diferentes ações com base em uma condição. Se a condição for verdadeira, uma ação é executada; caso contrário, outra ação alternativa é executada. Vejamos um exemplo:</p></div>
            <div class="exemplo">
                <p class="sessoes">Algoritmo VerificaParImpar
                <br><br>  
                <p>Var</p> <br>  
                <p class="codigo"> numero: inteiro</p>
                <br><br>  
                <p class="sessoes">Inicio</p>
                <p class="codigo">  Escreva("Digite um número:") <br>
                    Leia(numero)
                    <br><br>
                    Se numero % 2 = 0 Então<br>
                    Escreva("O número é par.")<br>
                    Senão<br> 
                    Escreva("O número é ímpar.")
                <br> 
              FimSe<br> <br>
              Escreva("Fim do programa.")</p><br> <br>
                <p class="sessoes">FimAlgoritmo</p></div>
                <div class="paragrafo">
        <p>Nesse exemplo, a estrutura condicional verifica se o número digitado é divisível por 2 (ou seja, se é par) usando a operação de módulo (%). Se a condição for verdadeira, o programa exibirá "O número é par.". Caso contrário, se a condição for falsa, o programa exibirá "O número é ímpar.".</p>
        <br>  <br>
    <p> 3.Estrutura condicional "Se... Então Se... Senão":<br>
        A estrutura condicional "Se... Então Se... Senão" é usada quando temos várias condições a serem verificadas sequencialmente. Cada condição é verificada em ordem e, assim que uma delas é verdadeira, a ação correspondente é executada. Se nenhuma condição for verdadeira, a ação no bloco "Senão" é executada. Vejamos um exemplo:</p>
</div>
<div class="exemplo">
    <p class="sessoes">Algoritmo VerificaIdade
    <br><br>  
    <p>Var</p> <br>  
    <p class="codigo"> idade: inteiro</p>
    <br><br>  
    <p class="sessoes">Inicio</p>
    <p class="codigo">  Escreva("Digite a idade:") <br>
        Leia(idade)

        <br><br>
        Se idade < 18 Então<br>
        Escreva("Você é menor de idade.")<br>
        Senão Se idade >= 18 E idade < 60 Então<br> 
        Escreva("Você é adulto.")
    <br> 
    Senão<br> 
    Escreva("Você é idoso.") <br>    
  FimSe<br> <br>
  Escreva("Fim do programa.")</p><br> <br>
    <p class="sessoes">FimAlgoritmo</p></div>
   
</body>

</html>