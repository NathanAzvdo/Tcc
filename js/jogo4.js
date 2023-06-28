// Frases sobre looping em Portugol
const loopingPhrases = [
  "O comando 'para' é usado para criar um loop com um número definido de iterações.",
  "O comando 'enquanto' é usado para criar um loop com uma condição de parada.",
  "O comando 'repita' é usado para criar um loop que executa primeiro e verifica a condição depois.",
  "O comando 'até que' é usado para definir a condição de parada de um loop 'repita'.",
  "Podemos usar o comando 'se' dentro de um loop para tomar decisões com base em condições.",
  "O comando 'senão' é usado em conjunto com 'se' para executar um bloco de código alternativo.",
  "O comando 'para cada' é usado para percorrer uma coleção de elementos.",
  "Podemos utilizar o comando 'interrompa' para sair antecipadamente de um loop.",
  "O comando 'continue' é usado para pular para a próxima iteração de um loop sem executar o restante do código."
];

// Obtém a referência para os elementos HTML relevantes
const hitButton = document.getElementById('hit-button');
const standButton = document.getElementById('stand-button');
const message = document.getElementById('message');
const scoreSpan = document.getElementById('score');
const educationalContent = document.getElementById('educational-content');

// Inicializa a pontuação do jogador
let score = 0;

// Função para gerar um valor aleatório entre 2 e 11
function getRandomCardValue() {
  return Math.floor(Math.random() * 10) + 2;
}

// Função para calcular o número de estrelas com base na pontuação
function calculateStars(score) {
  if (score >= 15) {
    return 5;
  } else if (score >= 10) {
    return 3;
  } else {
    return 1;
  }
}

// Atualiza a pontuação e exibe na tela
function updateScore(value) {
  score += value;
  scoreSpan.textContent = `Pontuação: ${score}`;

  if (score > 21) {
    message.textContent = 'Você perdeu!';
    hitButton.disabled = true;
    standButton.disabled = true;
    displayStarsDiv(0);
  } else if (score === 21) {
    message.textContent = 'Você ganhou!';
    hitButton.disabled = true;
    standButton.disabled = true;
    const stars = calculateStars(score);
    displayStarsDiv(stars);
  } else {
    message.textContent = 'Clique em "Hit" para receber uma carta.';
  }
}

// Manipulador de clique para o botão "Hit"
hitButton.addEventListener('click', function () {
  const cardValue = getRandomCardValue();
  updateScore(cardValue);
  displayRandomEducationalContent();
});

// Função para exibir as divs de estrelas
function displayStarsDiv(stars) {
  if (stars === 5) {
    document.getElementById('cinco-estrelas').style.display = 'block';

  } else if (stars === 3) {
    document.getElementById('tres-estrelas').style.display = 'block';
  } else {
      
  }
}

// Função para calcular o número de estrelas com base na pontuação
function calculateStars(score) {
  if (score >= 15) {
    return 5;
  } else if (score >= 10) {
    return 3;
  } else {
    return 1;
  }
}

// Manipulador de clique para o botão "Stand"
standButton.addEventListener('click', function () {
  message.textContent = 'Você encerrou sua rodada.';
  hitButton.disabled = true;
  standButton.disabled = true;

  const stars = calculateStars(score);
  displayStarsDiv(stars);
});

// Função para exibir um conteúdo educativo aleatório
function displayRandomEducationalContent() {
  const randomIndex = Math.floor(Math.random() * loopingPhrases.length);
  const phrase = loopingPhrases[randomIndex];
  educationalContent.textContent = phrase;
}
