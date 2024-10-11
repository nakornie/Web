<!--
Ceci est un mini projet développé en suivant le cour :
"Apprenez à programmer avec JavaScript"
de la platforme OpenClassrooms. 
-->

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>AzerType</title>
        <link href="../../style.css" rel="stylesheet">
        <link href="azertype_style.css" rel="stylesheet">
        <script src="scripts/config.js" defer></script>
        <script src="scripts/popup.js" defer></script>
        <script src="scripts/script.js" defer></script>
        <script src="scripts/main.js" defer></script>
    </head>

    <body>
        <header>
            <h1>Jeux AzerType</h1>
            <nav>
                <ul>
                    <li>
                        <a href="../../index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="#Règles_AzerType">Règles</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="toCenterPlayground">
                <div class="playground">
                    <div class="zoneOptions">
                        <p>Choisissez votre option et tapez la proposition qui s'affiche dans le champ en-dessous.</p>
                        <div class="optionSource">
                            <input type="radio" name="optionSource" id="mots" value="1" checked>
                            <label for="mots">Mots</label>
                            <input type="radio" name="optionSource" id="phrases" value="2">
                            <label for="phrases">Phrases</label>
                        </div>
                    </div>
            
                    <div class="zoneProposition">
                        AzerType
                    </div>
            
                    <div class="zoneSaisie">
                        <input type="text" id="inputEcriture" name="inputEcriture">
                        <button id="btnStartGame">Commencer</button>
                    </div>
            
                    <div class="zoneScore">
                        Votre score : <span id="score">0</span>
                        <br>
                        Timer : <span id="timer">00:00</span>
                    </div>
                </div>
            </div>

            <h1 id="Règles_AzerType" class="banniere">Règles du jeu</h1>
            <h2 class="banniere">But du jeu</h2>
            <p>
                Le but du jeu est simple : gagner un maximum de point en un minimum de temps !
                <br>
                Comment gagner des points ? Recopiez sans faute le contenu de la banière centrale.
            </p>

            <h2 class="banniere">Déroulement du jeu</h2>
            <ul>
                <li>
                    Choisissez le type de contenu que vous désirez.
                </li>
                <li>
                    Lancez la partie, le timer se mettra aussitôt en marche.
                </li>
                <li>
                    Recopiez la proposition et appuyez sur le bouton "Valider" pour passer à la suivante.
                </li>
            </ul>
        </main>

        <footer>
            <p>Pour toutes réclamations regardant la qualité du site... Essayez voir, je vous regarde : )</p>
        </footer>
    </body>
</html>