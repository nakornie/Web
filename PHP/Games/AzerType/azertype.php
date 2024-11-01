<?php 
    $pageName = "AzerType";
    $rootPath = "../..";
?>

<!DOCTYPE HTML>
<html lang="en">
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/head.php'); ?>

    <body>
    <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/header.php'); ?>

        <main>
            <div class="toCenterContent">
                <div class="playground">
                    <div class="zoneOptions">
                        <p>Chose your game option and enter the propostition displayed below.</p>
                        <div class="optionSource">
                            <input type="radio" name="optionSource" id="words" value="1" checked>
                            <label for="mots">Words</label>
                            <input type="radio" name="optionSource" id="sentences" value="2">
                            <label for="phrases">Sentences</label>
                        </div>
                    </div>
            
                    <div class="displayZone">
                        AzerType
                    </div>
            
                    <div class="inputZone">
                        <input type="text" id="inputEcriture" name="inputEcriture">
                        <button id="btnStartGame">Start</button>
                    </div>
            
                    <div class="scoreZone">
                        Your score : <span id="score">0</span>
                        <br>
                        Timer : <span id="timer">00:00</span>
                    </div>
                </div>
            </div>

            <h1 id="rules" class="banner">Game's rules</h1>
            <h2 class="banner">Goal</h2>
            <p>
                The goal is simple : win a maximum of points in the shortest time !
                <br>
                How to gain points ? Enter the proposition displayed in the banner.
            </p>

            <h2 class="banner">How to Play</h2>
            <ul>
                <li>
                    Chose the type of content desired
                </li>
                <li>
                    Launch the game, the timer will automatically start running.
                </li>
                <li>
                    Write the proposition and click on "Validate" to display the next one.
                </li>
            </ul>
        </main>

        <?php require_once(__DIR__ . '/' . $rootPath . '/Inclusions/footer.php'); ?>
    </body>
</html>