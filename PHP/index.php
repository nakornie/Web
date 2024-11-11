<?php
    $pageName = "Home";
    // Pour PHP (inclure des fichiers)
    $fileRootPath = __DIR__ . '/';  // Chemin de fichiers, basé sur le dossier actuel
    // Pour les URLs HTML (liens)
    $rootPath = '/webgames';  // Chemin relatif pour les liens HTML
?>

<?php require_once($fileRootPath . 'Globals/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once($fileRootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once($fileRootPath . 'Inclusions/header.php'); ?>

        <main>
            <h1 id="soloGames"><?php echo t('solo') ?></h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Words" class="icone">
                </a>
                <a href="Games/Minesweeper/minesweeper.php">
                    <img src="Images/minesweeper.png" alt ="Minesweeper" title="Solo, Puzzle" class="icone">
                </a>
            </div>

            <h1 id="MultiplayersGames"><?php echo t('multi') ?></h1>
            <div class="icones_row">
                <a href="Games/TicTacToe/tictactoe.php">
                    <img src="Images/tictactoe.jpeg" alt="tictactoe" title="Multiplayer, Puzzle" class="icone">
                </a>
            </div>

            <h1 id="WordsGames"><?php echo t('words') ?></h1>
            <div class="icones_row">
                <a href="Games/AzerType/azertype.php">
                    <img src="Images/azerType.png" alt="AzerType" title="Solo, Words" class="icone">
                </a>
            </div>

            <h1 id="PuzzleGames"><?php echo t('puzzle') ?></h1>
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