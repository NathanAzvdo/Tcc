var currentPlayer = 'X';
var board = [['', '', ''], ['', '', ''], ['', '', '']];
var moves = 0;
var isFirstAIMove = true;

function jogada() {
  const input = document.getElementById('jogada').value;
  const div = document.getElementById(input);

  if (div.innerHTML.trim() === "") {
    if (currentPlayer === 'X') {
      div.innerHTML = "X";
    } else {
      div.innerHTML = "O";
    }

    var position = input.substring(1, input.length - 1).split(',');
    var row = parseInt(position[0]);
    var col = parseInt(position[1]);

    board[row][col] = currentPlayer;
    moves++;

    if (checkWin(row, col)) {
      document.getElementById('cinco-estrelas').style.display="block";
      resetGame();
    } else if (moves === 9) {
      alert("Empate!");
      resetGame();
    } else {
      switchPlayer();
      if (currentPlayer === 'O') {
        if (!isFirstAIMove) {
          setTimeout(() => makeAIMove(), 500);
        } else {
          isFirstAIMove = false;
          makeAIMove();
        }
      }
    }
  }
}

function switchPlayer() {
  currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
}

function checkWin(row, col) {
  // Verifica vitória na linha
  if (board[row][0] === currentPlayer && board[row][1] === currentPlayer && board[row][2] === currentPlayer) {
    return true;
  }

  // Verifica vitória na coluna
  if (board[0][col] === currentPlayer && board[1][col] === currentPlayer && board[2][col] === currentPlayer) {
    return true;
  }

  // Verifica vitória na diagonal principal
  if (board[0][0] === currentPlayer && board[1][1] === currentPlayer && board[2][2] === currentPlayer) {
    return true;
  }

  // Verifica vitória na diagonal secundária
  if (board[0][2] === currentPlayer && board[1][1] === currentPlayer && board[2][0] === currentPlayer) {
    return true;
  }

  return false;
}

function makeAIMove() {
    var availableMoves = [];
  
    for (var i = 0; i < 3; i++) {
      for (var j = 0; j < 3; j++) {
        if (board[i][j] === '') {
          availableMoves.push({ row: i, col: j });
        }
      }
    }
  
    var randomMove = availableMoves[Math.floor(Math.random() * availableMoves.length)];
    var row = randomMove.row;
    var col = randomMove.col;
  
    board[row][col] = 'O';
    var cellId = "[" + row + "," + col + "]";
    document.getElementById(cellId).innerHTML = 'O';
    moves++;
  
    if (checkWin(row, col)) {
      setTimeout(function () {
        document.getElementById('uma-estrela').style.display="block";
      }, 0);
      resetGame();
    } else if (moves === 9) {
      setTimeout(function () {
        alert("Empate!");
      }, 0);
      resetGame();
    } else {
      switchPlayer();
    }
  }
  
  
function minimax(board, depth, isMaximizing) {
  if (checkWin(0, 0)) {
    return isMaximizing ? -1 : 1;
  }

  if (checkWin(0, 2)) {
    return isMaximizing ? -1 : 1;
  }

  if (checkWin(1, 1)) {
    return isMaximizing ? -1 : 1;
  }

  if (checkWin(2, 0)) {
    return isMaximizing ? -1 : 1;
  }

  if (checkWin(2, 2)) {
    return isMaximizing ? -1 : 1;
  }

  if (depth === 9) {
    return 0;
  }

  if (isMaximizing) {
    var bestScore = -Infinity;
    for (var i = 0; i < 3; i++) {
      for (var j = 0; j < 3; j++) {
        if (board[i][j] === '') {
          board[i][j] = 'O';
          var score = minimax(board, depth + 1, false);
          board[i][j] = '';
          bestScore = Math.max(score, bestScore);
        }
      }
    }
    return bestScore;
  } else {
    var bestScore = Infinity;
    for (var i = 0; i < 3; i++) {
      for (var j = 0; j < 3; j++) {
        if (board[i][j] === '') {
          board[i][j] = 'X';
          var score = minimax(board, depth + 1, true);
          board[i][j] = '';
          bestScore = Math.min(score, bestScore);
        }
      }
    }
    return bestScore;
  }
}

function resetGame() {
  var cells = document.getElementsByClassName('centro')[0].children;
  for (var i = 0; i < cells.length; i++) {
    cells[i].innerHTML = '';
  }

  currentPlayer = 'X';
  board = [['', '', ''], ['', '', ''], ['', '', '']];
  moves = 0;
  isFirstAIMove = true;

  if (currentPlayer === 'O') {
    setTimeout(function () {
      makeAIMove();
    }, 0);
  }
}
