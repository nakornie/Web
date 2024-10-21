<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        echo "<title>{$pageName}</title>";

        echo '<link href="' . $rootPath . '/style.css" rel="stylesheet">';
        echo '<link href="' . strtolower($pageName) . '_style.css" rel="stylesheet">';
        
        if ($pageName != "Home") {
            echo '<script src="scripts/config.js" defer></script>';
            echo '<script src="scripts/script.js" defer></script>';
            echo '<script src="scripts/main.js" defer></script>';
        }
    ?>
</head>
