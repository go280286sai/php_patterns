<?php
//
///**
// * Строит ясное описание бизнес-правил, на соответствие которым могут быть проверены объекты.
// */
//
//class Specification
//{
//    /**
//     * @var array
//     */
//    private array $specification = array();
//
//    /**
//     * @param $spec
//     * @return void
//     */
//    public function addSpecification($spec): void
//    {
//        $this->specification[] = $spec;
//    }
//
//    /**
//     * @param $item
//     * @return bool
//     */
//    public function isSatisfiedBy($item): bool
//    {
//        foreach ($this->specification as $spec) {
//            if (!$spec->isSatisfiedBy($item)) {
//                return false;
//            }
//        }
//
//        return true;
//    }
//}
//
//interface ItemSpecification
//{
//    /**
//     * @param object $item
//     * @return bool
//     */
//    public function isSatisfiedBy(object $item): bool;
//}
//
//class ColorSpecification implements ItemSpecification
//{
//    /**
//     * @var string
//     */
//    private string $color;
//
//    /**
//     * @param string $color
//     */
//    public function __construct(string $color)
//    {
//        $this->color = $color;
//    }
//
//    /**
//     * @param object $item
//     * @return bool
//     */
//    public function isSatisfiedBy(object $item): bool
//    {
//        return $item->getColor() === $this->color;
//    }
//}
//
//class SizeSpecification implements ItemSpecification
//{
//    /**
//     * @var string
//     */
//    private string $size;
//
//    /**
//     * @param string $size
//     */
//    public function __construct(string $size)
//    {
//        $this->size = $size;
//    }
//
//    /**
//     * @param object $item
//     * @return bool
//     */
//    public function isSatisfiedBy(object $item): bool
//    {
//        return $item->getSize() === $this->size;
//    }
//}
//
//class Item
//{
//    /**
//     * @var string
//     */
//    private string $color;
//    /**
//     * @var string
//     */
//    private string $size;
//
//    /**
//     * @param string $color
//     * @param string $size
//     */
//    public function __construct(string $color, string $size)
//    {
//        $this->color = $color;
//        $this->size = $size;
//    }
//
//    /**
//     * @return string
//     */
//    public function getColor(): string
//    {
//        return $this->color;
//    }
//
//    /**
//     * @return string
//     */
//    public function getSize(): string
//    {
//        return $this->size;
//    }
//}
//
//$item1 = new Item("red", "small");
//$item2 = new Item("blue", "medium");
//$item3 = new Item("red", "large");
//
//var_dump($item3->getColor());
//var_dump($item3->getSize());
//
//$colorSpec = new ColorSpecification("red");
//$sizeSpec = new SizeSpecification("small");
//
//$specification = new Specification();
//$specification->addSpecification($colorSpec);
//$specification->addSpecification($sizeSpec);
//
//echo "Item 1 satisfies the specification: " . ($specification->isSatisfiedBy($item1) ? "Yes" : "No") . "\n";
//echo "Item 2 satisfies the specification: " . ($specification->isSatisfiedBy($item2) ? "Yes" : "No") . "\n";
//echo "Item 3 satisfies the specification: " . ($specification->isSatisfiedBy($item3) ? "Yes" : "No") . "\n";
