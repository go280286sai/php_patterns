<?php
//
///**
// * Статическая Фабрика использует только один статический метод, чтобы создать все допустимые типы объектов
// */
//interface Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string;
//}
//
//class Product_1 implements Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string
//    {
//        return 'I am a product_1';
//    }
//}
//
//class Product_2 implements Workers
//{
//    /**
//     * @return string
//     */
//    public function work(): string
//    {
//        return 'I am a product_2';
//    }
//}
//
//class ProductFactory
//{
//    /**
//     * @param string $name
//     * @return object|false
//     */
//    public static function make(string $name): object|false
//    {
//        $class = ucfirst($name);
//        if(class_exists($class)){
//            return new $class;
//        } return false;
//    }
//}
//
//$product1 = ProductFactory::make('Product_1');
//$product2 = ProductFactory::make('Product_2');
//
//echo $product1->work();
//echo $product2->work();
