// Récupérer les options sélectionnées
const filters = {
    type: 'undefined',   // Exemple : type de jeu sélectionné
    mode: 'undefined'    // Exemple : mode de jeu sélectionné
};

// Fonction pour filtrer les jeux
function filterGames() {
    // Récupérer tous les éléments avec la classe "game"
    const games = document.querySelectorAll('.gameScores');
    
    games.forEach(game => {
        // Vérifier si l'élément contient les classes correspondant aux filtres
        const matchesType = game.classList.contains(filters.type) || filters.type === 'undefined';
        const matchesMode = game.classList.contains(filters.mode) || filters.mode === 'undefined';

        // Afficher ou masquer l'élément
        if (matchesType && matchesMode) {
            game.style.display = 'block'; // Afficher
        } else {
            game.style.display = 'none'; // Masquer
        }
    });
}


function linkFunctions() {
    profilIMGpreview();

    const searchButton = document.getElementById("searchButton");
    searchButton.addEventListener("click", () => {
        searchGameByName();
    });

    const resetButton = document.getElementById("resetButton");
    resetButton.addEventListener("click", () => {
        resetScoresSection();
    });

    document.getElementById('nbPlayers').addEventListener('change', (event) => {
        filters.mode = event.target.value; // Met à jour le mode sélectionné
        filterGames();
    });
    
    document.getElementById('gameType').addEventListener('change', (event) => {
        filters.type = event.target.value; // Met à jour le type sélectionné
        filterGames();
    });
}


function profilIMGpreview() {
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
            header.classList.toggle('active');
        });
    });
    
    // Prévisualisation de l'image de profil
    document.getElementById('profileImage').addEventListener('change', function() {
        const file = this.files[0];
        const reader = new FileReader();
    
        reader.onload = function(e) {
            const img = document.getElementById('imagePreview');
            img.src = e.target.result;
            img.style.display = 'block'; // Affiche l'image
        }
    
        if (file) {
            reader.readAsDataURL(file);
        }
    });
}


function resetScoresSection() {
    const games = document.querySelectorAll('.gameScores');

    console.log("reset");

    games.forEach(game => {
        game.style.display = 'block';
    });

    const searchGame = document.getElementById('searchGame');
    searchGame.value = "";

    const nbPlayersDropdown = document.getElementById('nbPlayers');
    const gameTypeDropdown = document.getElementById('gameType');

    nbPlayersDropdown.value = 'undefined';
    gameTypeDropdown.value = 'undefined';
}


function searchGameByName() {
    const searchGame = document.getElementById('searchGame');
    const searchedGame = searchGame.value;

    const games = document.querySelectorAll('.gameScores');

    games.forEach(game => {
        if (game.id !== searchedGame) {
            game.style.display = 'none';
        } else {
            game.style.display = 'block';
        }
    });
}