<?php
//
///**
// * Выступает в роли посредника для двунаправленной передачи данных между постоянным хранилищем данных
// */
//class UserMapper
//{
//    /**
//     * @param Users $user
//     * @return array
//     */
//    public static function map(Users $user): array
//    {
//        return array(
//            'id' => $user->getId(),
//            'username' => $user->getUserName(),
//            'email' => $user->getEmail()
//        );
//    }
//}
//
//interface Users
//{
//    /**
//     * @return int
//     */
//    public function getId(): int;
//
//    /**
//     * @return string
//     */
//    public function getUserName(): string;
//
//    /**
//     * @return string
//     */
//    public function getEmail(): string;
//}
//
//class User implements Users
//{
//    /**
//     * @var int
//     */
//    private int $id;
//    /**
//     * @var string
//     */
//    private string $name;
//    /**
//     * @var string
//     */
//    private string $email;
//
//    /**
//     * @param int $id
//     * @param string $name
//     * @param string $email
//     */
//    public function __construct(int $id, string $name, string $email)
//    {
//        $this->name = $name;
//        $this->id = $id;
//        $this->email = $email;
//    }
//
//    /**
//     * @return int
//     */
//    public function getId(): int
//    {
//        return $this->id;
//    }
//
//    /**
//     * @return string
//     */
//    public function getUserName(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @return string
//     */
//    public function getEmail(): string
//    {
//        return $this->email;
//    }
//}
//
//$user = new User(1, 'Alex', 'admin@admin.ua');
//$map = UserMapper::map($user);
//print_r($map);
