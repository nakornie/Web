<?php
session_start();
$typePage = isset($pageName) && $pageName === 'Home' 
            ? 'Home' 
            : ((strpos($pageName, 'Login') !== false || strpos($pageName, 'Profil') !== false) 
                ? 'Login' 
                : 'Game');

if (!isset($_SESSION['userLogged'])) {$_SESSION['userLogged'] = false;}
?>

<header>
    <?php if ($typePage === 'Home' && !$_SESSION['userLogged']) : ?>
        <h1>Welcome !</h1>
        <h2>Chose a game and have fun !</h2>
    <?php endif; ?>
    
    <?php if ($typePage != 'Home') : ?>
        <h1><?php echo isset($pageName) ? $pageName : 'Game X'; ?></h1>
    <?php endif; ?>

    <?php 
    if ($_SESSION['userLogged']) :
        if (isset($_SESSION['userImage'])) :
            $imagePath = $rootPath . 'User/profilImages/' . $_SESSION['userImage'];
            echo '<img src="' . $imagePath . '" alt="' . $_SESSION['userImage'] . '" class="profil-image">';
        endif; 
        echo '<h1> '. $_SESSION['userName'] .'</h1>';
    endif;    
    ?>

    <nav>
        <ul>
            <?php if ($typePage != 'Home') : ?>
                <li><a href="<?php echo $rootPath; ?>/index.php">Home</a></li>
            <?php endif; ?>

            <?php if ($typePage === 'Game') : ?>
                <li><a href="#rules">Rules</a></li>
            <?php endif; ?>

            <?php 
            if ($_SESSION['userLogged'] && $pageName != "Profil") :
                echo '<li><a href="' . $rootPath . '/User/profil/profil.php">Profil</a></li>';
            endif; 
            ?>

            <?php 
            if ($typePage != 'Login') {
                if (!$_SESSION['userLogged']){
                    echo '<li><a href="' . $rootPath . '/User/login/login.php">Login</a></li>';
                } else {
                    $_SESSION['redirectAfterLogout'] = $_SERVER['REQUEST_URI'];
                    echo '<li><a href="' . $rootPath . '/logout.php">Logout</a></li>';
                }
            }
            ?>
        </ul>
    </nav>
</header>
