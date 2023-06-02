<?php
//
///**
// * Методы, которые возвращают объект или Null, вместо этого должны вернуть объект
// */
//abstract class AbstractObject
//{
//    /**
//     * @return void
//     */
//    abstract public function doSomething(): void;
//}
//
//// Реализация нулевого объекта
//class NullObject extends AbstractObject
//{
//    /**
//     * @return void
//     */
//    public function doSomething(): void
//    {
//        // pass
//    }
//}
//
//class ConcreteObject extends AbstractObject
//{
//    public function doSomething(): void
//    {
//        echo "Выполнение действия...\n";
//    }
//}
//
//$object = new ConcreteObject();
//$object->doSomething();
//
//$nullObject = new NullObject();
//$nullObject->doSomething();
