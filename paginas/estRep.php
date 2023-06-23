<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/visualg.css">
    <link rel="icon" href="../img/icon.png">
    <title>CodeGenious - Estruturas De Repetição</title>
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

    <h1 class="titulo">Estruturas De Repetição
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>

    <div class="paragrafo">
        <p>As estruturas de repetição, também conhecidas como loops, são recursos fundamentais na programação que permitem executar um bloco de código várias vezes, de acordo com uma condição específica. Elas permitem automatizar tarefas repetitivas e facilitar a manipulação de conjuntos de dados.</p><br>
        <p>Você pode pensar nas estruturas de repetição como um "faça isso várias vezes até que algo aconteça" dentro do seu código. Elas nos permitem controlar a repetição de um bloco de instruções até que uma condição seja atendida..<br>
          </p></div>

    <div style="text-align:center;">
        <div class="subtitulo">Tipos de estruturas de repetição:</div>
    </div>

    <div class="paragrafo">
        <p>No Visualg, existem três tipos principais de estruturas de repetição: "Enquanto", "Repita" e "Para". Vamos entender cada uma delas:</p> <br>
        <br>
    <p>1. Estrutura de repetição "Enquanto":<br>
        A estrutura "Enquanto" executa um bloco de código repetidamente enquanto uma determinada condição for verdadeira. É como fazer uma pergunta e, enquanto a resposta for sim, continuar executando o bloco de código. Vejamos um exemplo:
    </p>
    </div>
    <div class="exemplo">
        <p class="sessoes">Algoritmo ContagemRegressiva
        <br><br>  
        <p>Var</p> <br>  
        <p class="codigo">contador: inteiro</p>
        <br><br>  
        <p class="sessoes">Inicio</p><br>
        <p class="codigo"> contador <- 10) <br><br>
            Enquanto contador > 0 Faça<br>
            Escreva(contador)<br>
            contador <- contador - 1<br>
            FimEnquanto
            Leia(num2) <br> 
            Escreva("Fim do programa.") <br>
           FimEnquanto<br> <br>
        Escreva("Fim do programa.")</p>
        <p class="sessoes">FimAlgoritmo</p></div>

        <div class="paragrafo">
        <p>Nesse exemplo, a estrutura "Enquanto contador > 0 Faça" verifica se o valor da variável "contador" é maior que zero. Enquanto essa condição for verdadeira, o programa exibirá o valor do contador e diminuirá 1 unidade do seu valor. Esse processo é repetido até que a condição não seja mais verdadeira (ou seja, quando o contador atingir 0).</p>
        <br><br>
        <p>2.Estrutura de repetição "Repita":<br>
            A estrutura "Repita" executa um bloco de código repetidamente até que uma determinada condição seja verdadeira. É como dizer "repita isso até que algo aconteça". Vejamos um exemplo:</p></div>
            <div class="exemplo">
                <p class="sessoes">Algoritmo AdivinharNumero
                <br><br>  
                <p>Var</p> <br>  
                <p class="codigo"> numeroSecreto, tentativa: inteiro</p>
                <br><br>  
                <p class="sessoes">Inicio</p><br>
                <p class="codigo">    
                    numeroSecreto <- 7 <br>
                    tentativa <- 0 <br>
                    Repita<br><br>
                   
                    Escreva("Digite um número:")<br>
                    Leia(tentativa)<br>
                    Até que tentativa = numeroSecreto<br><br>

                    Escreva("Parabéns! Você acertou o número secreto.")
                <br>  <br> 
               
              Escreva("Fim do programa.")</p><br> <br>
                <p class="sessoes">FimAlgoritmo</p></div>
                <div class="paragrafo">
        <p>Nesse exemplo, a estrutura "Repita" continuará repetindo o bloco de código até que a variável "tentativa" seja igual ao "numeroSecreto" (que é o número 7 nesse caso). O programa solicita que você digite um número repetidamente até acertar o número secreto. Assim que a condição for atendida, o programa exibirá a mensagem "Parabéns! Você acertou o número secreto.".</p>
        <br>  <br>
    <p> 3.Estrutura de repetição "Para":<br>
        A estrutura "Para" é usada quando sabemos exatamente quantas vezes queremos repetir um bloco de código. Ela define uma variável de controle que é incrementada ou decrementada automaticamente após cada iteração.</p>
</div>
<div class="exemplo">
    <p class="sessoes">Algoritmo Tabuada
    <br><br>  
    <p>Var</p> <br>  
    <p class="codigo">   numero, resultado, contador: inteiro</p>
    <br><br>  
    <p class="sessoes">Inicio</p>
    <p class="codigo">     Escreva("Digite um número:") <br>
        Leia(numero)

        <br><br>
        Para contador de 1 até 10 passo 1 Faça<br>
        resultado <- numero * contador  <br>
        Escreva(numero, " x ", contador, " = ", resultado)<br> 
        FimPara
    <br> <br> 

    Escreva("Fim do programa.") <br><br>

    <p class="sessoes">FimAlgoritmo</p></div>
    <div class="paragrafo">
        <p>Neste exemplo, o programa solicita ao usuário um número e, em seguida, utiliza o loop "Para" para exibir a tabuada desse número. O bloco de código é repetido 10 vezes (de 1 a 10) e o resultado é calculado e exibido em cada interação.. <br>
            Esses são os três tipos principais de estruturas de repetição no Visualg: "Enquanto", "Repita" e "Para". Cada um tem suas próprias características e é utilizado de acordo com a necessidade específica do problema a ser resolvido.
        </p>
</body>

</html>