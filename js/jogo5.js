// Array de palavras
var words = [
  "função",
  "procedimento",
  "retorno",
  "parâmetro",
  "argumento",
  "encapsulamento",
  "Escopo",
  "Modularidade",
  "Assinatura",
  "Recursão",
];

// Elementos HTML
var hangmanImg = document.getElementById("hangman-img");
var wordContainer = document.getElementById("word");
var lettersContainer = document.getElementById("letters");

// Variáveis do jogo
var selectedWord;
var guessedWord;
var errorCount;
var maxErrors;
var formId;

// Mapeamento de letras acentuadas para suas formas sem acento
var accentMap = {
  á: "a",
  â: "a",
  ã: "a",
  à: "a",
  é: "e",
  ê: "e",
  í: "i",
  î: "i",
  ó: "o",
  ô: "o",
  õ: "o",
  ú: "u",
  û: "u",
};

// Função para iniciar o jogo
function startGame() {
  // Selecionar uma palavra aleatória do array
  selectedWord = words[Math.floor(Math.random() * words.length)];

  // Inicializar as variáveis do jogo
  guessedWord = "";
  for (var i = 0; i < selectedWord.length; i++) {
    guessedWord += "_ ";
  }
  wordContainer.innerText = guessedWord;

  errorCount = 0;
  maxErrors = selectedWord.length;

  // Limpar o teclado
  lettersContainer.innerHTML = "";

  // Adicionar as letras para escolher
  for (var i = 65; i <= 90; i++) {
    var letter = String.fromCharCode(i);
    var span = document.createElement("span");
    span.innerText = letter;
    span.classList.add("letter-key");
    span.addEventListener("click", checkLetter);
    lettersContainer.appendChild(span);
  }

  // Adicionar a letra "ç" ao teclado
  var cedilhaSpan = document.createElement("span");
  cedilhaSpan.innerText = "ç";
  cedilhaSpan.classList.add("letter-key");
  cedilhaSpan.addEventListener("click", checkLetter);
  lettersContainer.appendChild(cedilhaSpan);

  // Reiniciar a imagem da forca
  hangmanImg.src = "../img/vazia.png";
}

// Função para remover acentos de uma letra
function removeAccent(letter) {
  return accentMap[letter] || letter;
}

// Função para verificar a letra selecionada
function checkLetter(event) {
  var clickedLetter = removeAccent(event.target.innerText);
  var newGuessedWord = "";

  // Verificar se a letra selecionada existe na palavra
  var letterFound = false;
  for (var i = 0; i < selectedWord.length; i++) {
    if (
      removeAccent(selectedWord[i].toLowerCase()) ===
      clickedLetter.toLowerCase()
    ) {
      newGuessedWord += selectedWord[i] + " ";
      letterFound = true;
    } else {
      newGuessedWord += guessedWord[i * 2] + " ";
    }
  }

  // Atualizar a palavra adivinhada
  guessedWord = newGuessedWord.trim();
  wordContainer.innerText = guessedWord;

  // Verificar se a letra selecionada não existe na palavra
  if (!letterFound) {
    errorCount++;
    event.target.classList.add("incorrect-letter");
  }

  // Desabilitar a letra selecionada
  event.target.removeEventListener("click", checkLetter);

  // Verificar se o jogo foi ganho
  if (!guessedWord.includes("_")) {
    lettersContainer.removeEventListener("click", checkLetter);

    // Determine formId based on the errorCount
    if (errorCount <= maxErrors / 2) {
      formId = "form1";
      document.getElementById("cinco-estrelas").style.display = "block";
    } else {
      formId = "form2";
      document.getElementById("tres-estrelas").style.display = "block";
    }

    // Reiniciar o jogo após um atraso para permitir que o usuário veja o resultado
    setTimeout(startGame, 2000);
  }

  // Verificar se o jogo foi perdido
  if (errorCount === maxErrors) {
    lettersContainer.removeEventListener("click", checkLetter);

    formId = "form3";
    document.getElementById("uma-estrela").style.display = "block";

    // Reiniciar o jogo após um atraso para permitir que o usuário veja o resultado
    setTimeout(startGame, 2000);
  }
}

// Chamar a função startGame para iniciar o jogo
startGame();
