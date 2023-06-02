<?php
//
///**
// *  Для передачи данных между подсистемами приложения
// */
//class UserDTO
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
//        $this->id = $id;
//        $this->name = $name;
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
//    public function getName(): string
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
//
//    /**
//     * @param $data
//     * @return self
//     */
//    public static function fromArray($data): self
//    {
//        return new self(
//            $data['id'],
//            $data['name'],
//            $data['email']
//        );
//    }
//
//    /**
//     * @return array
//     */
//    public function toArray(): array
//    {
//        return [
//            'id' => $this->id,
//            'name' => $this->name,
//            'email' => $this->email
//        ];
//    }
//}
//
//$obj = UserDTO::fromArray(['id'=>1, 'name'=> 'Alex','email'=> 'admin@admin.ua']);
//print_r($obj->getId());
//$obj = new UserDTO(1, 'Sergey', 'user@admin.ua');
//var_dump($obj->getName());
//var_dump($obj->getEmail());
//print_r($obj->toArray());
