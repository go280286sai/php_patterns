<?php
//
///**
// * Выгодное отличие от SimpleFactory в том, что вы можете вынести реализацию создания объектов в подклассы.
// */
//interface Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string;
//}
//
//class Developer implements Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string
//    {
//        return 'is developer';
//    }
//}
//
//class Design implements Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string
//    {
//        return 'is design';
//    }
//}
//
//interface WorksFactory
//{
//    /**
//     * @return object
//     */
//    public static function make(): object;
//}
//
//class DesignFactory implements WorksFactory
//{
//    /**
//     * @return Design
//     */
//    public static function make(): object
//    {
//        return new Design();
//    }
//}
//
//class DeveloperFactory implements WorksFactory
//{
//    /**
//     * @return Developer
//     */
//    public static function make(): object
//    {
//        return new Developer();
//    }
//}
//
//$DeveloperFactory = DeveloperFactory::make();
//$DesignFactory = DesignFactory::make();
//
//var_dump($DeveloperFactory->work());
//var_dump($DesignFactory->work());
//
//abstract class Product
//{
//    /**
//     * @return string
//     */
//    abstract public function operation(): string;
//}
//
//class ConcreteProduct1 extends Product
//{
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return "Результат работы ConcreteProduct1.";
//    }
//}
//
//class ConcreteProduct2 extends Product
//{
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return "Результат работы ConcreteProduct2.";
//    }
//}
//
//abstract class Creator
//{
//    /**
//     * @return Product
//     */
//    abstract public function factoryMethod(): Product;
//
//    /**
//     * @return string
//     */
//    public function someOperation(): string
//    {
//        $product = $this->factoryMethod();
//        $result = "Создан экземпляр " . get_class($product) . ". ";
//        $result .= $product->operation();
//        return $result;
//    }
//}
//
//class Creator1 extends Creator
//{
//    /**
//     * @return Product
//     */
//    public function factoryMethod(): Product
//    {
//        return new ConcreteProduct1();
//    }
//}
//
//class Creator2 extends Creator
//{
//    /**
//     * @return Product
//     */
//    public function factoryMethod(): Product
//    {
//        return new ConcreteProduct2();
//    }
//}
//
//$creator1 = new Creator1();
//echo $creator1->someOperation();
//$creator2 = new Creator2();
//echo $creator2->someOperation();
