<?php
//
///**
// * Порождающий паттерн проектирования, который позволяет создавать семейства связанных объектов, не привязываясь
// * к конкретным классам создаваемых объектов.
// */
//
//abstract class AbstractFactory
//{
//    /**
//     * @return AbstractProductA
//     */
//    abstract public function createProductA(): AbstractProductA;
//
//    /**
//     * @return AbstractProductB
//     */
//    abstract public function createProductB(): AbstractProductB;
//}
//
//abstract class AbstractProductA
//{
//    /**
//     * @return string
//     */
//    abstract public function usefulFunctionA(): string;
//}
//
//abstract class AbstractProductB
//{
//    /**
//     * @return string
//     */
//    abstract public function usefulFunctionB(): string;
//
//    /**
//     * @param AbstractProductA $productA
//     * @return string
//     */
//    abstract public function anotherUsefulFunctionB(AbstractProductA $productA): string;
//}
//
//class ConcreteFactory1 extends AbstractFactory
//{
//    /**
//     * @return AbstractProductA
//     */
//    public function createProductA(): AbstractProductA
//    {
//        return new ConcreteProductA1();
//    }
//
//    /**
//     * @return AbstractProductB
//     */
//    public function createProductB(): AbstractProductB
//    {
//        return new ConcreteProductB1();
//    }
//}
//
//class ConcreteFactory2 extends AbstractFactory
//{
//    /**
//     * @return AbstractProductA
//     */
//    public function createProductA(): AbstractProductA
//    {
//        return new ConcreteProductA2();
//    }
//
//    /**
//     * @return AbstractProductB
//     */
//    public function createProductB(): AbstractProductB
//    {
//        return new ConcreteProductB2();
//    }
//}
//
//class ConcreteProductA1 extends AbstractProductA
//{
//    /**
//     * @return string
//     */
//    public function usefulFunctionA(): string
//    {
//        return "The result of the product A1.";
//    }
//}
//
//class ConcreteProductA2 extends AbstractProductA
//{
//    /**
//     * @return string
//     */
//    public function usefulFunctionA(): string
//    {
//        return "The result of the product A2.";
//    }
//}
//
//class ConcreteProductB1 extends AbstractProductB
//{
//    /**
//     * @return string
//     */
//    public function usefulFunctionB(): string
//    {
//        return "The result of the product B1.";
//    }
//
//    /**
//     * @param AbstractProductA $productA
//     * @return string
//     */
//    public function anotherUsefulFunctionB(AbstractProductA $productA): string
//    {
//        return "The result of the product B1 collaborating with ({$productA->usefulFunctionA()})";
//    }
//}
//
//class ConcreteProductB2 extends AbstractProductB
//{
//    /**
//     * @return string
//     */
//    public function usefulFunctionB(): string
//    {
//        return "The result of the product B2.";
//    }
//
//    /**
//     * @param AbstractProductA $productA
//     * @return string
//     */
//    public function anotherUsefulFunctionB(AbstractProductA $productA): string
//    {
//        return "The result of the product B2 collaborating with ({$productA->usefulFunctionA()})";
//    }
//}
//
///**
// * @param AbstractFactory $factory
// * @return void
// */
//function clientCode(AbstractFactory $factory): void
//{
//    $productA = $factory->createProductA();
//    $productB = $factory->createProductB();
//
//    echo $productA->usefulFunctionA() . "\n";
//    echo $productB->usefulFunctionB() . "\n";
//    echo $productB->anotherUsefulFunctionB($productA) . "\n";
//}
//
//echo "Client: Testing the factory 1...\n";
//clientCode(new ConcreteFactory1());
//
//echo "\nClient: Testing the factory 2...\n";
//clientCode(new ConcreteFactory2);
