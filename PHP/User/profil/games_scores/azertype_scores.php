<?php
include_once __DIR__ . '/../../../SQL/db.php';
include_once __DIR__ . '/../../../SQL/AzertypeManager.php';
require_once __DIR__ . '/../../../Globals/config.php';

$userName = $_SESSION['userName'];

$bestTimeWord = $AzertypeManager->getBestTime($userName, "words");
$bestTimeSentence= $AzertypeManager->getBestTime($userName, "sentences");

$bestScoreWord = $AzertypeManager->getBestScore($userName, "words");
$bestScoreSentence = $AzertypeManager->getBestScore($userName, "sentences");

$bestRatioWord = $AzertypeManager->getBestRatio($userName, "words");
$bestRatioSentence = $AzertypeManager->getBestRatio($userName, "sentences");

$avgTimeWord = $AzertypeManager->getMeanTime($userName, "words");
$avgTimeSentence= $AzertypeManager->getMeanTime($userName, "sentences");

$avgScoreWord = $AzertypeManager->getMeanScore($userName, "words");
$avgScoreSentence = $AzertypeManager->getMeanScore($userName, "sentences");

$avgRatioWord = $AzertypeManager->getMeanRatio($userName, "words");
$avgRatioSentence = $AzertypeManager->getMeanRatio($userName, "sentences");

$worstTimeWord = $AzertypeManager->getWorstTime($userName, "words");
$worstTimeSentence= $AzertypeManager->getWorstTime($userName, "sentences");

$worstScoreWord = $AzertypeManager->getWorstScore($userName, "words");
$worstScoreSentence = $AzertypeManager->getWorstScore($userName, "sentences");

$worstRatioWord = $AzertypeManager->getWorstRatio($userName, "words");
$worstRatioSentence = $AzertypeManager->getWorstRatio($userName, "sentences");
?>

<div class="toCenterContent">
<table>
    <caption><?php echo t('scoreForWords') ?></caption>
    <tr>
        <th></th>
        <th><?php echo t('best') ?></th>
        <th><?php echo t('avg') ?></th>
        <th><?php echo t('worst') ?></th>
    </tr>
    <tr>
        <th><?php echo t('time') ?> (s)</th>
        <td><?php echo $bestTimeWord ?> s</td>
        <td><?php echo $avgTimeWord ?> s</td>
        <td><?php echo $worstTimeWord ?> s</td>
    </tr>
    <tr>
        <th><?php echo t('score_s') ?> (%)</th>
        <td><?php echo $bestScoreWord ?> %</td>
        <td><?php echo $avgScoreWord ?> %</td>
        <td><?php echo $worstScoreWord ?> %</td>
    </tr>
    <tr>
        <th><?php echo t('ratio') ?></th>
        <td><?php echo $bestRatioWord ?></td>
        <td><?php echo $avgRatioWord ?></td>
        <td><?php echo $worstRatioWord ?></td>
    </tr>
</table>
</div>

<div class="toCenterContent">
<table>
    <caption><?php echo t('scoreForSentences') ?></caption>
    <tr>
        <th></th>
        <th><?php echo t('best') ?></th>
        <th><?php echo t('avg') ?></th>
        <th><?php echo t('worst') ?></th>
    </tr>
    <tr>
    <th><?php echo t('time') ?> (s)</th>
        <td><?php echo $bestTimeSentence ?> s</td>
        <td><?php echo $avgTimeSentence ?> s</td>
        <td><?php echo $worstTimeSentence ?> s</td>
    </tr>
    <tr>
    <th><?php echo t('score_s') ?> (%)</th>
        <td><?php echo $bestScoreSentence ?> %</td>
        <td><?php echo $avgScoreSentence ?> %</td>
        <td><?php echo $worstScoreSentence ?> %</td>
    </tr>
    <tr>
    <th><?php echo t('ratio') ?></th>
        <td><?php echo $bestRatioSentence ?></td>
        <td><?php echo $avgRatioSentence ?></td>
        <td><?php echo $worstRatioSentence ?></td>
    </tr>
</table>
</div>