<?php
//
///**
// * Класс зависимости (Dependency)
// */
//class DatabaseConnection
//{
//    /**
//     * @param string $name
//     * @return string
//     */
//    public function connect(string $name): string
//    {
//        return $name;
//    }
//}
//
//class UserManager
//{
//    /**
//     * @var DatabaseConnection
//     */
//    private DatabaseConnection $db;
//
//    /**
//     * @param DatabaseConnection $db
//     */
//    public function __construct(DatabaseConnection $db)
//    {
//        $this->db = $db;
//    }
//
//    /**
//     * @param $userId
//     * @return string
//     */
//    public function getUserData($userId): string
//    {
//        return $this->db->connect($userId);
//    }
//}
//
//$databaseConnection = new DatabaseConnection();
//
//$userManager = new UserManager($databaseConnection);
//
//echo $userManager->getUserData(123);
