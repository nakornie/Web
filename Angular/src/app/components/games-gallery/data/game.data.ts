export const GAMES = [
    { name: 'Minesweeper', 
        img: 'public/images/games/minesweeper.png', 
        route: 'minesweeper', 
        categories: ['puzzle', 'solo'], 
        goal: 'Find all the mines without exploding !',
        rules: 'Cases with numbers indicate the number of bombs around them, corners included.\nIf you think a case is safe, click it. If you think that it is a bomb, put a flag on it.'
    },
        
    
    { name: 'Tic-Tac-Toe', 
        img: 'public/images/games/tictactoe.jpeg', 
        route: 'tic-tac-toe', 
        categories: ['strategy', 'multiplayer'], 
        goal: 'Aligne 3 identical symbols to win, horizontaly, verticaly or diagonaly !',
        rules: 'Two players are needed. Turn by turn, each will select a case to put their symbols in. The first to reach the goal wins. ' 
    },

    { name: 'Morse Decoder', 
        img: '', 
        route: 'morse-decoder', 
        categories: ['words', 'solo'], 
        goal: 'Decode the Morse messages as fast as possible !',
        rules: 'Chose a level of difficulty.\nDecode the message.\nValidate.\nProceed with the next until the end of the list.\nBe carefull of the timer, but mind your answers !' 
    },
];
  