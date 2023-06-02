<?php
///**
// * Простой интерфейс к сложной системе классов, библиотеке или фреймворку.
// */
//
//class Subsystem1
//{
//    /**
//     * @return void
//     */
//    public function operation1(): void
//    {
//        echo "Subsystem1: operation1\n";
//    }
//
//    /**
//     * @return void
//     */
//    public function operation2(): void
//    {
//        echo "Subsystem1: operation2\n";
//    }
//}
//
//class Subsystem2
//{
//    /**
//     * @return void
//     */
//    public function operation1(): void
//    {
//        echo "Subsystem2: operation1\n";
//    }
//
//    /**
//     * @return void
//     */
//    public function operation2(): void
//    {
//        echo "Subsystem2: operation2\n";
//    }
//}
//
//class Facade
//{
//    /**
//     * @var object
//     */
//    private object $subsystem1;
//    /**
//     * @var object
//     */
//    private object $subsystem2;
//
//    public function __construct()
//    {
//        $this->subsystem1 = new Subsystem1();
//        $this->subsystem2 = new Subsystem2();
//    }
//
//    /**
//     * @return void
//     */
//    public function operation(): void
//    {
//        echo "Facade initializes subsystems:\n";
//        $this->subsystem1->operation1();
//        $this->subsystem2->operation1();
//        echo "Facade triggers subsystems:\n";
//        $this->subsystem1->operation2();
//        $this->subsystem2->operation2();
//    }
//}
//
//$facade = new Facade();
//$facade->operation();
