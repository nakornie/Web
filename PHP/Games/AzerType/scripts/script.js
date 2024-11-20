let i = 0;
let score = 0;
let gameList = words;
let difficulty = "words";
let time = 0;
let timerRunning = false;

function addSecond() {
    if (timerRunning) {
        let timer = document.querySelector(".scoreZone #timer");
        let minutes = parseInt(time / 60, 10);
        let secondes = parseInt(time % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        secondes = secondes < 10 ? "0" + secondes : secondes;

        timer.innerText = minutes + ":" + secondes;
        time++;
    }
}

// Activates the radio buttons used to slect the level
function ableRadioButtons() {
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    listOptionButtons.forEach((button) => {
        button.disabled = false;
    });
}

// Deactivates the radio buttons used to select the level
function disableRadioButtons() {
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    listOptionButtons.forEach((button) => {
        button.disabled = true;
    });
}

// Displays the word or sentence to write
function displayProposition(proposition) {
    let displayZone = document.querySelector(".displayZone");
    displayZone.innerText = proposition;
}

// Displays the score in the following manners : number of words well writen / number of words proposed
function displayResults(score, nbTries) {
    let scoreZone = document.querySelector(".scoreZone #score");
    scoreZone.innerText = `${score} / ${nbTries}`;
}

// The main function during the game
function gameLoop() {
    setInterval(addSecond, 1000);

    let validateButton = document.getElementById("validateButton");

    validateButton.addEventListener("click", function buttonLoop() {
        // Gets the player's input
        let inputElement = document.getElementById("inputEcriture");
        let input = inputElement.value;

        // Compares the player's input with the desired proposition
        // Add +1 to score if the input matches the proposition
        // Incrementes the index of the list of propositions
        if (gameList[i] === input) {
            score++;
        }
        i++;

        // Check if we reached the end of the list
        if (i === gameList.length) {
            timerRunning = false;
            displayProposition("Game Over !!!"); // Display end message
            validateButton.innerText = "New Game";
            validateButton.removeEventListener("click", buttonLoop);
            resetGame();
        } else {
            displayProposition(gameList[i]); // Displays the next proposition to write
        }

        // Empties the input area and display the score
        inputElement.value = "";
        displayResults(score, i);
    })
}

// Function to handle game reset
function resetGame() {
    // Sends score in database
    sendScore();

    let validateButton = document.getElementById("validateButton");
    validateButton.innerText = "New Game";
    validateButton.id = "btnStartGame"; // Reset button ID for next start

    // Restart game setup
    validateButton.addEventListener("click", function buttonResetGame(){
        // Reset game settings
        i = 0;
        score = 0;
        time = 0;

        validateButton.innerText = "Start";

        let timer = document.querySelector(".scoreZone #timer");
        timer.innerText = "00:00";
        displayProposition("AzerType");
        displayResults(score, i);
        ableRadioButtons();
        validateButton.removeEventListener("click", buttonResetGame);
        startGame();
    }, { once: true })
}


// Sends score to database
function sendScore() {
    const payload = {
        timer: time, 
        player_score: Math.round((score / i * 100) * 100) / 100, 
        ratio: Math.round((player_score / time) * 100) / 100, 
        difficulty: difficulty,
    };

    console.log('Payload envoyé :', payload);

    fetch('/webgames/Games/AzerType/scripts/add_score.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(payload),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Score ajouté avec succès !');
        } else {
            console.error('Erreur lors de l\'ajout du score :', data.error);
        }
    })
    .catch(error => {
        console.error('Erreur réseau :', error);
    });
}


// Prepares the game
function startGame() {
    // Choose whether the list used will be words or sentences through radio buttons
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    for (let i = 0; i < listOptionButtons.length; i++) {
        listOptionButtons[i].addEventListener("change", (event) => {
            if (event.target.value === "1") {
                gameList = words
                difficulty = "words"
            } else {
                gameList = sentences
                difficulty = "sentences"
            }
        })
    }

    // Starts the games when the button is clicked :
    // The radio buttons are deactivated
    // The first proposition is written
    // The <Start> button vecomes a <Validate> one
    // The game loop is launched
    let startButton = document.getElementById("btnStartGame");
    startButton.addEventListener("click", function buttonStartGame() {
        disableRadioButtons()
        displayProposition(gameList[0]);
        startButton.innerText = "Validate";
        startButton.id = "validateButton";
        startButton.removeEventListener("click", buttonStartGame);
        timerRunning = true;
        gameLoop();
    }, { once: true }); // The startButton can only be clicked once
}