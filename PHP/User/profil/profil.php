<?php
    $pageName = "Profil";
    $rootPath = "../../";
?>

<?php require_once($rootPath . 'Globals/config.php'); 
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
    <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/head.php'); ?>

    <body>
        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/header.php'); ?>

        <main>
        <div class="toCenterContent">
            <div class="accordionSettings">
                <form action="../validations/update_language_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_language') ?></div>
                        <div class="accordion-content">
                            <div>
                                <input type="radio" name="language" id="en" value="en" checked>
                                <label for="en">English</label>
                            </div>
                            <div>
                                <input type="radio" name="language" id="fr" value="fr">
                                <label for="fr">Français</label>
                            </div>
                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_colors_validation.php" method="POST">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_color') ?></div>
                        <div class="accordion-content">
                            <div class="accordion-color">
                                <div>
                                    <input type="radio" name="colorOption" id="personalized" value="personalized" checked>
                                    <label for="personalized"><?php echo t('personalized') ?></label>
                                </div>
                                <div>
                                    <input type="radio" name="colorOption" id="default" value="default">
                                    <label for="default"><?php echo t('default') ?></label>
                                </div>
                            </div>

                            <div class="accordion-color">
                                <label for="mainColor"><?php echo t('main') ?></label>
                                <input type="color" id="mainColor" name="mainColor" value="<?php echo $_SESSION['userColors']['mainColor'] ?? '#960151'; ?>">
                            </div>

                            <div class="accordion-color">
                                <label for="subColor"><?php echo t('secondary') ?></label>
                                <input type="color" id="subColor" name="subColor" value="<?php echo $_SESSION['userColors']['subColor'] ?? '#FFEAFD'; ?>">
                            </div>

                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>

                <form action="../validations/update_profilIMG_validation.php" method="POST" enctype="multipart/form-data">
                    <div class="accordion">
                        <div class="accordion-header"><?php echo t('title_img') ?></div>
                        <div class="accordion-content">
                            <div class="file-upload-container">
                                <input type="file" name="profileImage" id="profileImage" accept="image/*">
                                <label for="profileImage" id="overlayButton"><?php echo t('img_button') ?></label>
                            </div>

                            <div class="toCenterContent">
                                <img id="imagePreview" src="#" alt="Image preview">
                            </div>


                            <button type="submit" class="save-btn"><?php echo t('save') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="gamesDiv">
            <div class="searchDiv">
                <div class="searchBar">
                    <input type="text" id="searchGame" name="searchGame" placeholder="<?php echo t('search-placeholder') ?>">
                    <button class="searchButton" id="searchButton">
                        <svg viewBox="0 0 1024 1024" class="searchIcone"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
                    </button>
                </div>

                <div class="toCenterContent">
                    <div class="selectOption">
                        <label for="nbPlayers"><?php echo t('nb_players') ?></label>
                        <br>
                        <select name="nbPlayers" id="nbPlayers">
                            <option value="undefined" selected><?php echo t('all_games') ?></option>
                            <option value="solo"><?php echo t('solo') ?></option>
                            <option value="multi"><?php echo t('multi') ?></option>
                        </select>
                    </div>
                </div>      

                <div class="toCenterContent">
                    <div class="selectOption">
                        <label for="gameType"><?php echo t('type_game') ?></label>
                        <br>
                        <select name="gameType" id="gameType">
                            <option value="undefined" selected><?php echo t('all_games') ?></option>
                            <option value="words"><?php echo t('words') ?></option>
                            <option value="puzzle"><?php echo t('puzzle') ?></option>
                        </select>
                    </div>
                </div>

                <div class="toCenterContent">
                    <button class="resetButton" id="resetButton"><?php echo t('reset') ?></button>
                </div>

            </div>

            <div class="scoresDiv">
                <h1><?php echo t('gameScores') ?></h1>

                <div class="accordion gameScores solo words" id="azertype">
                    <div class="accordion-header">
                        <h2>Azertype</h2>
                    </div>
                    <div class="accordion-content">
                        <?php require_once(__DIR__ . '/games_scores/azertype_scores.php'); ?>
                    </div>
                </div>

                <div class="accordion gameScores multi puzzle" id="tic-tac-toe">
                    <div class="accordion-header">
                    <h2><?php echo t('tictactoe') ?></h2>
                    </div>
                    <div class="accordion-content">
                        <p>Play to win</p>
                    </div>
                </div>

                <div class="accordion gameScores solo puzzle" id="minesweeper">
                    <div class="accordion-header">
                        <h2><?php echo t('minesweeper') ?></h2>
                    </div>
                    <div class="accordion-content">
                        <p>Play to win</p>
                    </div>
                </div>            
            </div>
        </div>
        

        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . 'Inclusions/footer.php'); ?>
    </body>
</html>