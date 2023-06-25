const cards = document.querySelectorAll('.memory-card');
const errorCounter = document.getElementById('error-counter');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
let errorCount = 0;
let matchCount = 0;
const maxErrors = 10;

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;
  this.classList.add('flipped');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this;
    return;
  }

  secondCard = this;
  checkForMatch();
}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
  isMatch ? disableCards() : unflipCards();
}

function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);
  resetBoard();
  matchCount++;
  if (matchCount === cards.length / 2) {
    if(errorCount>=7){
        setTimeout(() => {
            document.getElementById('tres-estrelas').style.display="block";
          }, 500);
    }
    else{
        setTimeout(() => {
          document.getElementById('cinco-estrelas').style.display="block";
          }, 500);
    }
  }
}

function unflipCards() {
  lockBoard = true;
  setTimeout(() => {
    firstCard.classList.remove('flipped');
    secondCard.classList.remove('flipped');
    resetBoard();
    errorCount++;
    errorCounter.textContent = errorCount;
    if (errorCount === maxErrors) {
      setTimeout(() => {
        alert('Você perdeu o jogo!');
        resetGame();
      }, 500);
    }
  }, 1000);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

function resetGame() {
  cards.forEach(card => {
    card.classList.remove('flipped');
    card.addEventListener('click', flipCard);
  });
  shuffleCards();
  errorCount = 0;
  matchCount = 0;
  errorCounter.textContent = errorCount;
}

(function shuffleCards() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * cards.length);
    card.style.order = randomPos;
  });
})();

cards.forEach(card => card.addEventListener('click', flipCard));
