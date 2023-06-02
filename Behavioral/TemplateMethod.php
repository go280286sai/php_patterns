<?php
//
///**
// * Определяет скелет алгоритма, перекладывая ответственность за некоторые его шаги на подклассы.
// * Паттерн позволяет подклассам переопределять шаги алгоритма, не меняя его общей структуры.
// */
//
//abstract class AbstractClass
//{
//    /**
//     * @return void
//     */
//    public function templateMethod(): void
//    {
//        $this->primitiveOperation1();
//        $this->primitiveOperation2();
//        $this->primitiveOperation3();
//    }
//
//    /**
//     * @return void
//     */
//    abstract protected function primitiveOperation1(): void;
//
//    /**
//     * @return void
//     */
//    abstract protected function primitiveOperation2(): void;
//
//    protected function primitiveOperation3(): void
//    {
//        echo "Default implementation of primitiveOperation3\n";
//    }
//}
//
//// Конкретный класс, наследующий абстрактный класс
//class ConcreteClass extends AbstractClass
//{
//
//    protected function primitiveOperation1(): void
//    {
//        echo "ConcreteClass: primitiveOperation1\n";
//    }
//
//    protected function primitiveOperation2(): void
//    {
//        echo "ConcreteClass: primitiveOperation2\n";
//    }
//
//    protected function primitiveOperation3(): void
//    {
//        echo "ConcreteClass: overridden primitiveOperation3\n";
//    }
//}
//
//$object = new ConcreteClass();
//$object->templateMethod();
