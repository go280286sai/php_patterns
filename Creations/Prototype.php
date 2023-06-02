<?php
//
///**
// * Порождающий паттерн проектирования, который позволяет копировать объекты, не вдаваясь в подробности их реализации.
// */
//
//abstract class Prototype
//{
//    /**
//     * @var string
//     */
//    protected string $name;
//
//    /**
//     * @param $name
//     */
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return object
//     */
//    abstract public function clone(): object;
//}
//
//class ConcretePrototype extends Prototype
//{
//    /**
//     * @param $name
//     */
//    public function __construct($name)
//    {
//        parent::__construct($name);
//    }
//
//    /**
//     * @return object
//     */
//    public function clone(): object
//    {
//        return clone $this;
//    }
//}
//
//$prototype = new ConcretePrototype('Прототип объекта');
//$clone = $prototype->clone();
//print_r($clone);
