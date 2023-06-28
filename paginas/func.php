<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:../index.php');

}
$email = $_SESSION['email'];
        
// Executa a consulta SQL
  $sql = "SELECT nivel FROM cadastro WHERE email = '{$email}'";
  $resultado = mysqli_query($conexao, $sql);
        
  if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
  }
        
  if ($linha = mysqli_fetch_assoc($resultado)) {
    $nivel = $linha['nivel'];
  }
  if($nivel<4){
    header('Location:telaInicial.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <h1 class="titulo">Função e Procedimento
        <div class="eng">
            <img src="../img/6500210.png">
        </div>

    </h1>
    <div class="subtitulo">Procedimento</div>
    <div class="paragrafo">
<p>No Visualg, um procedimento é um bloco de código que executa uma sequência de instruções, mas não retorna um valor específico. Ele nos ajuda a agrupar um conjunto de ações relacionadas em uma única unidade, tornando o código mais organizado e legível.</p>

<p> Vamos criar um exemplo de procedimento simples que exibe uma mensagem na tela. Suponha que queremos exibir a mensagem "Olá! Bem-vindo ao meu programa!". Podemos criar o seguinte procedimento:</p></div>

<div class="exemplo">
       
       
   
    <p class="codigo">procedimento exibirMensagem()</p> 
    <br>
    <p class="codigo">inicio</p>
    <br>    
    <p class="sessoes">escreva("Olá! Bem-vindo ao meu programa!")</p>  <br>   
    <p class="codigo"> fimprocedimento</p> <br>
</div>

    <div class="paragrafo">
        <p>Neste exemplo, o procedimento exibirMensagem contém uma única instrução: o comando escreva que imprime a mensagem na tela.</p>

    <p>Agora, vamos criar um programa principal que chama esse procedimento:</p>
        
    </div>

    <div class="exemplo">
       
       
   
        <p class="codigo">algoritmo"Exemplo de Uso de Procedimento</p> 
        <br>
        <p class="codigo">inicio</p>
        <br>    
        <p class="sessoes">exibirMensagem()</p>  <br>   
        <p class="codigo"> fimalgoritmo</p> <br>
    </div>
    
    <div class="paragrafo">
<p> Neste exemplo, o programa principal chama o procedimento exibirMensagem simplesmente escrevendo o nome dele. </p>   
<br>
<p>Quando o programa é executado, ele chama o procedimento exibirMensagem, que por sua vez exibe a mensagem "Olá! Bem-vindo ao meu programa!" na tela.</p>
<br>
<p>Os procedimentos são úteis quando temos um conjunto de instruções que precisam ser executadas várias vezes em diferentes partes do programa. Ao invés de repetir o mesmo código em várias partes, podemos encapsular essas instruções em um procedimento e chamá-lo sempre que necessário.</p>
<br>
<p>Por exemplo, se tivermos um programa que precisa exibir uma mensagem de boas-vindas em vários pontos, em vez de escrever o mesmo código de exibição de mensagem em cada local, podemos simplesmente chamar o procedimento exibirMensagem para realizar essa tarefa.</p>
</div>
    <div class="subtitulo">Função</div>
    <div class="paragrafo">
        <p>No Visualg, uma função é um bloco de código que recebe parâmetros, executa uma tarefa específica e retorna um valor. Ela nos ajuda a modularizar o código e reutilizar determinada lógica em diferentes partes do programa.</p><br>
    <p>Vamos criar um exemplo de função que recebe dois números como parâmetros, realiza uma operação matemática e retorna o resultado. Suponha que queremos calcular a soma de dois números. Podemos criar a seguinte função:</p></div>

    <div class="exemplo">
       
       
        <p>funcao calcular(numero1, numero2)</p> <br>  
        <p class="codigo">soma <- numero + numero2</p>
        <br>  
        <p class="codigo"> retorne soma <br><br>
        <p class="sessoes">fimfuncao</p><br>
        
         </div>
         <div class="paragrafo">
            <p>Neste exemplo, a função calcularSoma recebe dois parâmetros: numero1 e numero2. Ela realiza a soma desses dois números e armazena o resultado na variável soma. Em seguida, a função usa o comando retorne para retornar o valor da soma para o local onde ela foi chamada.</p>
            <br>
            <br>
        <p> Agora, vamos criar um programa principal que usa essa função para calcular a soma de dois números inseridos pelo usuário:</p></div>

        <div class="exemplo">
            <p class="sessoes">algoritmo "Exemplo de uso de Função"
            <br><br>  
            <p>var</p> <br>  
            <p class="codigo">n1, n2 resultado: zero</p>
            <br><br>  
            <p class="sessoes">Inicio</p><br>
            <p class="codigo"> escreva("Digite o primeiro número: ")
                <p class="codigo"> leia(n1)</p>
                <p class="codigo">escreva("Digite o segundo número: ")</p>
                <p class="codigo"> leia(n2)</p><br><br>
                <p class="codigo"> resultado <- calcularSoma(n1, n2)
                <br>
                <br> 
               <p class="codigo">escreva("A soma dos dois números é: ", resultado)</p><br>
               <p class="sessoes">fimalgoritmo</p> <br></div>
               
               
              
       

    <div class="paragrafo">
        <p>Neste exemplo, o programa principal solicita ao usuário que digite dois números. Os valores são armazenados nas variáveis n1 e n2. Em seguida, o programa chama a função calcularSoma, passando os dois números como argumentos. O resultado retornado pela função é armazenado na variável resultado e, por fim, é exibido na tela utilizando o comando escreva.</p>
    <p>Quando o programa é executado, ele solicitará os números ao usuário, calculará a soma usando a função calcularSoma e exibirá o resultado na tela.</p>    
    </div>
   
    <div class="btnjog">
        <a href="jogoFunc.php"><button id="btnjog">Jogar</button></a>
    </div>
    
</body>

</html>

</html>