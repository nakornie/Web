<?php
    $pageName = "Home";
    // Pour PHP (inclure des fichiers)
    $fileRootPath = __DIR__ . '/';  // Chemin de fichiers, basé sur le dossier actuel
    // Pour les URLs HTML (liens)
    $rootPath = '/webgames';  // Chemin relatif pour les liens HTML
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once($fileRootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once($fileRootPath . 'Inclusions/header.php'); ?>

        <main>
            <h1 id="soloGames">Solo Games</h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Words" class="icone">
                </a>
                <a href="Games/Minesweeper/minesweeper.php">
                    <img src="Images/minesweeper.png" alt ="Minesweeper" title="Solo, Puzzle" class="icone">
                </a>
            </div>

            <h1 id="MultiplayersGames">Multiplayers Games</h1>
            <div class="icones_row">
                <a href="Games/TicTacToe/tictactoe.php">
                    <img src="Images/tictactoe.jpeg" alt="tictactoe" title="Multiplayer, Puzzle" class="icone">
                </a>
            </div>

            <h1 id="WordsGames">Words games</h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Words" class="icone">
                </a>
            </div>

            <h1 id="PuzzleGames">Puzzle Games</h1>
            <div class="icones_row">
                <a href="Games/TicTacToe/tictactoe.php">
                    <img src="Images/tictactoe.jpeg" alt="tictactoe" title="Multiplayer, Puzzle" class="icone">
                </a>
                <a href="Games/Minesweeper/minesweeper.php">
                    <img src="Images/minesweeper.png" alt ="Minesweeper" title="Solo, Puzzle" class="icone">
                </a>
                <a href="Games/TicTacToe/tictactoe.php">
                    <img src="Images/tictactoe.jpeg" alt="tictactoe" title="Multiplayer, Puzzle" class="icone">
                </a>
                <a href="Games/Minesweeper/minesweeper.php">
                    <img src="Images/minesweeper.png" alt ="Minesweeper" title="Solo, Puzzle" class="icone">
                </a>
                <a href="Games/TicTacToe/tictactoe.php">
                    <img src="Images/tictactoe.jpeg" alt="tictactoe" title="Multiplayer, Puzzle" class="icone">
                </a>
                <a href="Games/Minesweeper/minesweeper.php">
                    <img src="Images/minesweeper.png" alt ="Minesweeper" title="Solo, Puzzle" class="icone">
                </a>
            </div>
        </main>

        <?php require_once($fileRootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>