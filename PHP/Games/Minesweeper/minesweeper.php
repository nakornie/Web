<?php 
    $pageName = "Minesweeper";
    $rootPath = "../..";
?>

<?php require_once(__DIR__ . '/' . $rootPath . '/Globals/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/head.php'); ?>

    <body>
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/header.php'); ?>
        
        <main>
            <img src="../../Images/minesweeper.png" alt="Minesweeper" title="Comming soon" class="replacement">
            <h1 id="rules" class="banner"><?php echo t('game_rules') ?></h1>
            <h2 class="banner"><?php echo t('goal') ?></h2>

            <h2 class="banner"><?php echo t('how_to_play') ?></h2>
        </main>

        <?php require_once(__DIR__ .  '/' . $rootPath . '/Inclusions/footer.php'); ?>
    </body>
</html>