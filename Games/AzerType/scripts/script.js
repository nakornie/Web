let i = 0;
let score = 0;
let gameList = words;

// Activates the radio buttons used to slect the level
function ableRadioButtons() {
    console.log("Activates the radio buttons");
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    listOptionButtons.forEach((button) => {
        button.disabled = false;
    });
}

// Deactivates the radio buttons used to select the level
function disableRadioButtons() {
    console.log("Deactivates the radio buttons");
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    listOptionButtons.forEach((button) => {
        button.disabled = true;
    });
}

// Displays the word or sentence to write
function displayProposition(proposition) {
    console.log("Display proposition : ", proposition);
    let zoneProposition = document.querySelector(".zoneProposition");
    zoneProposition.innerText = proposition;
}

// Displays the score in the following manners : number of words well writen / number of words proposed
function displayResults(score, nbTries) {
    console.log("Display result : ", score, " / ", nbTries);
    let zoneScore = document.querySelector(".zoneScore span");
    zoneScore.innerText = `${score} / ${nbTries}`;
}

// The main function during the game
function gameLoop() {
    console.log("Enter gameloop");

    let validateButton = document.getElementById("btnValiderMot");

    validateButton.addEventListener("click", function buttonLoop() {
        // Gets the player's input
        let inputElement = document.getElementById("inputEcriture");
        let input = inputElement.value;

        // Compares the player's input with the desired proposition
        // Add +1 to score if the input matches the proposition
        // Incrementes the index of the list of propositions
        console.log("Compare : ", input, gameList[i], i);
        if (gameList[i] === input) {
            score++;
        }
        i++;

        // Check if we reached the end of the list
        console.log("Element : ", i, gameList.length);
        if (i === gameList.length) {
            displayProposition("Fin du jeu !!!"); // Display end message
            validateButton.innerText = "Recommencer";
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
    console.log("Prepare to reset game")
    let validateButton = document.getElementById("btnValiderMot");
    validateButton.innerText = "Recommencer";
    validateButton.id = "btnStartGame"; // Reset button ID for next start

    // Restart game setup
    validateButton.addEventListener("click", function buttonResetGame(){
        console.log("Reset game")
        // Reset game settings
        i = 0;
        score = 0;
        validateButton.innerText = "Commencer";
        displayProposition("AzerType");
        displayResults(score, i);
        ableRadioButtons();
        validateButton.removeEventListener("click", buttonResetGame);
        startGame();
    }, { once: true })
}

// Prepares the game
function startGame() {
    console.log("Enter startGame");

    // Choose whether the list used will be words or sentences through radio buttons
    let listOptionButtons = document.querySelectorAll('.optionSource input');
    for (let i = 0; i < listOptionButtons.length; i++) {
        listOptionButtons[i].addEventListener("change", (event) => {
            if (event.target.value === "1") {
                gameList = words
            } else {
                gameList = sentences
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
        startButton.innerText = "Valider";
        startButton.id = "btnValiderMot";
        startButton.removeEventListener("click", buttonStartGame);
        gameLoop();
    }, { once: true }); // The startButton can only be clicked once
}