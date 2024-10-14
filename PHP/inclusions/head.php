<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        echo "<title>{$gameName}</title>";

        if ($gameName === "Home") {
            echo '<link href="style.css" rel="stylesheet">';
        }
        else {
            echo '<link href="../../style.css" rel="stylesheet">';
        }
        if ($gameName === "AzerType") {
            echo '<link href="azertype_style.css" rel="stylesheet">';
            echo '<script src="scripts/config.js" defer></script>';
            echo '<script src="scripts/script.js" defer></script>';
            echo '<script src="scripts/main.js" defer></script>';
        }
    ?>
</head>
