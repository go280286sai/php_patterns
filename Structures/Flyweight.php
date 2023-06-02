<?php
//
///**
// * Позволяет вместить большее количество объектов в отведённую оперативную память. Легковес экономит память,
// * разделяя общее состояние объектов между собой, вместо хранения одинаковых данных в каждом объекте.
// */
//
//interface FlyweightInterface
//{
//    /**
//     * @return void
//     */
//    public function operation(): void;
//}
//class ConcreteFlyweight implements FlyweightInterface
//{
//    /**
//     * @var string
//     */
//    private string $sharedState;
//
//    /**
//     * @param $sharedState
//     */
//    public function __construct($sharedState)
//    {
//        $this->sharedState = $sharedState;
//    }
//
//    /**
//     * @return void
//     */
//    public function operation(): void
//    {
//        echo "ConcreteFlyweight: Работа с общим состоянием $this->sharedState\n";
//    }
//}
//class FlyweightFactory
//{
//    /**
//     * @var array
//     */
//    private array $flyweights = array();
//
//    /**
//     * @param $sharedState
//     * @return FlyweightInterface
//     */
//    public function getFlyweight($sharedState): FlyweightInterface
//    {
//        if (!isset($this->flyweights[$sharedState])) {
//            $this->flyweights[$sharedState] = new ConcreteFlyweight($sharedState);
//        }
//
//        return $this->flyweights[$sharedState];
//    }
//}
//
//$factory = new FlyweightFactory();
//
//$flyweight1 = $factory->getFlyweight("Состояние A");
//$flyweight1->operation();
//
//$flyweight2 = $factory->getFlyweight("Состояние B");
//$flyweight2->operation();
//
//$flyweight3 = $factory->getFlyweight("Состояние A");
//$flyweight3->operation();
//
//#Sample 2
//
//interface Render
//{
//    /**
//     * @return string
//     */
//    public function render(): string;
//}
//
//class TypeMail
//{
//    /**
//     * @var string
//     */
//    private string $type;
//
//    /**
//     * @param string $type
//     */
//    public function __construct(string $type)
//    {
//        $this->type = $type;
//    }
//
//    /**
//     * @return string
//     */
//    public function getText(): string
//    {
//        return $this->type;
//    }
//}
//
//class BusinessMail extends TypeMail implements Render
//{
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        return $this->getText();
//    }
//}
//
//class WorkMail extends TypeMail implements Render
//{
//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        return $this->getText();
//    }
//}
//
//class FabricaMail
//{
//    /**
//     * @var array
//     */
//    private array $pool = array();
//
//    /**
//     * @param int $id
//     * @param string $typeMail
//     * @return object
//     */
//    public function getMail(int $id, string $typeMail): object
//    {
//        if (!isset($this->pool[$id])) {
//            $this->pool[$id] = $this->make($typeMail);
//        }
//        return $this->pool[$id];
//    }
//
//    /**
//     * @param string $type
//     * @return object
//     */
//    public function make(string $type): object
//    {
//        if ($type === 'business') {
//            return new BusinessMail("This is business mail");
//        }
//        return new WorkMail('This is work mail');
//    }
//}
//
//$make = new FabricaMail();
//$mail = $make->getMail(1, 'business');
//var_dump($mail->render());
