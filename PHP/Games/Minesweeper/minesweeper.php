<?php 
    $pageName = "Minesweeper";
    $rootPath = "../..";
?>

<!DOCTYPE html>
<html lang="fr">
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/head.php'); ?>

    <body>
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/header.php'); ?>
        
        <main>
            <img src="../../Images/minesweeper.png" alt="Minesweeper" title="Comming soon" class="replacement">
            <h1 id="rules" class="banner">Game's Rules</h1>
            <h2 class="banner">Goal</h2>
            <h2 class="banner">How to play</h2>
        </main>

        <?php require_once(__DIR__ .  '/' . $rootPath . '/Inclusions/footer.php'); ?>
    </body>
</html>