<?php
class UserManager {
    private $mysqlClient;

    public function __construct($mysqlClient) {
        $this->mysqlClient = $mysqlClient;
    }

    public function addUser($userName, $userPassword) {
        $sqlQuery = 'INSERT INTO UsersInfo(user_name, user_password) VALUES (:user_name, :user_password)';
        $newUser = $this->mysqlClient->prepare($sqlQuery);
        $newUser->execute([
            'user_name' => $userName,
            'user_password' => $userPassword,
        ]);
    }

    public function getUserByName($userName) {
        $sqlQuery = 'SELECT * FROM usersInfo WHERE user_name = :user_name';
        $wantedUser = $this->mysqlClient->prepare($sqlQuery);
        $wantedUser->execute([
            'user_name' => $userName,
        ]);
        $user = $wantedUser->fetch(PDO::FETCH_ASSOC);

        return $user ?: false;
    }

    public function getUserColors($userName) {
        $sqlQuery = 'SELECT user_main_color, user_secondary_color FROM usersInfo WHERE user_name = :user_name';
        $colors = $this->mysqlClient->prepare($sqlQuery);
        $colors->execute([
            'user_name' => $userName,
        ]);
        $user = $colors->fetch(PDO::FETCH_ASSOC);

        return $user ?: false;
    }

    public function getUserImage($userName) {
        $sqlQuery = 'SELECT user_img FROM usersInfo WHERE user_name = :user_name';
        $img = $this->mysqlClient->prepare($sqlQuery);
        $img->execute([
            'user_name' => $userName,
        ]);
        $user = $img->fetch(PDO::FETCH_ASSOC);

        return $user ?: false;
    }

    public function setUserColors($userName, $mainColor, $subColor) {
        $sqlQuery = 'UPDATE usersInfo SET user_main_color = :user_main_color, user_secondary_color = :user_secondary_color WHERE user_name = :user_name';
        $colors = $this->mysqlClient->prepare($sqlQuery);
        $colors->execute([
            'user_name' => $userName,
            'user_main_color' => $mainColor,
            'user_secondary_color' => $subColor
        ]);
    }

    public function setUserImage($userName, $profilIMG) {
        $sqlQuery = 'UPDATE usersInfo SET user_img= :user_img WHERE user_name = :user_name';
        $colors = $this->mysqlClient->prepare($sqlQuery);
        $colors->execute([
            'user_name' => $userName,
            'user_img' => $profilIMG
        ]);
    }
}
?>