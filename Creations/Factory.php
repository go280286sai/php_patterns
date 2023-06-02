<?php
//
///**
// * Порождающий паттерн проектирования, который определяет общий интерфейс для создания объектов в суперкласе,
// * позволяя подклассам изменять тип создаваемых объектов.
// */
//
//abstract class Product
//{
//    /**
//     * @return string
//     */
//    abstract public function getName(): string;
//}
//
//class ConcreteProductA extends Product
//{
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return 'Product A';
//    }
//}
//
//class ConcreteProductB extends Product
//{
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return 'Product B';
//    }
//}
//
//class ProductFactory
//{
//    /**
//     * @param string $type
//     * @return Product
//     * @throws Exception
//     */
//    public function createProduct(string $type): Product
//    {
//        return match ($type) {
//            'A' => new ConcreteProductA(),
//            'B' => new ConcreteProductB(),
//            default => throw new Exception("Unknown product type: $type"),
//        };
//    }
//}
//
//$factory = new ProductFactory();
//
//try {
//    $productA = $factory->createProduct('A');
//    echo $productA->getName();
//} catch (Exception $e) {
//}
//echo "\n";
//try {
//    $productB = $factory->createProduct('B');
//    echo $productB->getName();
//} catch (Exception $e) {
//}
//
