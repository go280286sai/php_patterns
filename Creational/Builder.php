<?php
//
///**
// * Порождающий паттерн проектирования, который позволяет создавать сложные объекты пошагово. Строитель даёт
// * возможность использовать один и тот же код строительства для получения разных представлений объектов.
// */
//class Product
//{
//    /**
//     * @var string
//     */
//    private string $name;
//    /**
//     * @var string
//     */
//    private string $price;
//    /**
//     * @var string
//     */
//    private string $description;
//
//    /**
//     * @param $name
//     * @return void
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @param $price
//     * @return void
//     */
//    public function setPrice($price): void
//    {
//        $this->price = $price;
//    }
//
//    /**
//     * @param $description
//     * @return void
//     */
//    public function setDescription($description): void
//    {
//        $this->description = $description;
//    }
//}
//
//class ProductBuilder
//{
//    /**
//     * @var object
//     */
//    private object $product;
//
//    public function __construct()
//    {
//        $this->product = new Product();
//    }
//
//    /**
//     * @param $name
//     * @return object
//     */
//    public function setName($name): object
//    {
//        $this->product->setName($name);
//        return $this;
//    }
//
//    /**
//     * @param $price
//     * @return object
//     */
//    public function setPrice($price): object
//    {
//        $this->product->setPrice($price);
//        return $this;
//    }
//
//    /**
//     * @param $description
//     * @return object
//     */
//    public function setDescription($description): object
//    {
//        $this->product->setDescription($description);
//        return $this;
//    }
//
//    /**
//     * @return object
//     */
//    public function getProduct(): object
//    {
//        return $this->product;
//    }
//}
//
//$productBuilder = new ProductBuilder();
//$product = $productBuilder->setName('Example Product')
//    ->setPrice(9.99)
//    ->setDescription('This is an example product')
//    ->getProduct();
//
//print_r($product);
