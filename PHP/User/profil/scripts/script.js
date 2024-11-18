function linkFunctions() {
    profilIMGpreview();

    const searchButton = document.getElementById("searchButton");
    searchButton.addEventListener("click", () => {
        showGamesOfInterest();
    });

    const resetButton = document.getElementById("resetButton");
    resetButton.addEventListener("click", () => {
        resetScoresSection();
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
}


function showGamesOfInterest() {
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