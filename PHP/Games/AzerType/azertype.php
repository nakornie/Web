<?php 
    $pageName = "AzerType";
    $rootPath = "../..";
?>

<?php require_once(__DIR__ . '/' . $rootPath . '/Globals/config.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/head.php'); ?>

    <body>
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/header.php'); ?>

        <main>
            <div class="toCenterContent">
                <div class="playground">
                    <div class="zoneOptions">
                        <p><?php echo t('azertype_pg_explanation') ?></p>
                        <div class="optionSource">
                            <input type="radio" name="optionSource" id="words" value="1" checked>
                            <label for="mots"><?php echo t('azertype_words') ?></label>
                            <input type="radio" name="optionSource" id="sentences" value="2">
                            <label for="phrases"><?php echo t('azertype_sentence') ?></label>
                        </div>
                    </div>
            
                    <div class="displayZone">
                        AzerType
                    </div>
            
                    <div class="inputZone">
                        <input type="text" id="inputEcriture" name="inputEcriture">
                        <button id="btnStartGame"><?php echo t('start') ?></button>
                    </div>
            
                    <div class="scoreZone">
                        <?php echo t('score') ?><span id="score">0</span>
                        <br>
                        <?php echo t('timer') ?><span id="timer">00:00</span>
                    </div>
                </div>
            </div>

            <h1 id="rules" class="banner"><?php echo t('game_rules') ?></h1>
            <h2 class="banner"><?php echo t('goal') ?></h2>
            <p><?php echo t('azertype_goal') ?></p>

            <h2 class="banner"><?php echo t('how_to_play') ?></h2>
            <?php echo t('azertype_how') ?>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/footer.php'); ?>
    </body>
</html>