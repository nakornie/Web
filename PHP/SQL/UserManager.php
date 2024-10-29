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
        $newUser = $this->mysqlClient->prepare($sqlQuery);
        $newUser->execute([
            'user_name' => $userName,
        ]);
        $user = $newUser->fetch(PDO::FETCH_ASSOC);

        return $user ?: false;
    }
}
?>