<?php
class AzertypeManager {
    private $mysqlClient;

    public function __construct($mysqlClient) {
        $this->mysqlClient = $mysqlClient;
    }

    function addScore($user_name, $timer, $score, $ratio, $difficulty) {
        // score is the % of success, ratio is the number of points/timer
        $sqlQuery = 'INSERT INTO AzertypeScores(user_name, timer, score, ratio, difficulty) VALUES (:user_name, :timer, :score, :ratio, :difficulty)';
        $newScore = $this->mysqlClient->prepare($sqlQuery);
        $newScore->execute([
            'user_name' => $user_name, 
            'timer' => $timer, 
            'score' => $score, 
            'ratio' => $ratio, 
            'difficulty' => $difficulty,
        ]);
    }

    function getBestTime($user_name, $difficulty) {
        $sqlQuery = 'SELECT MIN(timer) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $bestTime = $this->mysqlClient->prepare($sqlQuery);
        $bestTime->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $bestTime->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getBestScore($user_name, $difficulty) {
        $sqlQuery = 'SELECT MAX(score) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $bestScore = $this->mysqlClient->prepare($sqlQuery);
        $bestScore->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $bestScore->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getBestRatio($user_name, $difficulty) {
        $sqlQuery = 'SELECT MAX(ratio) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $bestRatio = $this->mysqlClient->prepare($sqlQuery);
        $bestRatio->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $bestRatio->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getMeanTime($user_name, $difficulty) {
        $sqlQuery = 'SELECT ROUND(AVG(timer), 2) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $meanTime = $this->mysqlClient->prepare($sqlQuery);
        $meanTime->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $meanTime->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getMeanScore($user_name, $difficulty) {
        $sqlQuery = 'SELECT ROUND(AVG(score), 2) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $meanScore = $this->mysqlClient->prepare($sqlQuery);
        $meanScore->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $meanScore->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getMeanRatio($user_name, $difficulty) {
        $sqlQuery = 'SELECT ROUND(AVG(ratio), 2) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $meanRatio = $this->mysqlClient->prepare($sqlQuery);
        $meanRatio->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $meanRatio->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getWorstTime($user_name, $difficulty) {
        $sqlQuery = 'SELECT MAX(timer) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $worstTime = $this->mysqlClient->prepare($sqlQuery);
        $worstTime->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $worstTime->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getWorstScore($user_name, $difficulty) {
        $sqlQuery = 'SELECT MIN(score) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $worstScore = $this->mysqlClient->prepare($sqlQuery);
        $worstScore->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $worstScore->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }

    function getWorstRatio($user_name, $difficulty) {
        $sqlQuery = 'SELECT MIN(ratio) as result FROM AzertypeScores WHERE user_name = :user_name AND difficulty = :difficulty';
        $worstRatio = $this->mysqlClient->prepare($sqlQuery);
        $worstRatio->execute([
            'user_name' => $user_name,
            'difficulty' => $difficulty
        ]);
        $return = $worstRatio->fetch(PDO::FETCH_ASSOC);

        return $return ? $return['result'] : false;
    }
}
?>