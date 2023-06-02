<?php
///**
// * Позволяет добавлять в программу новые операции, не изменяя классы объектов,
// * над которыми эти операции могут выполняться.
// */
//
//interface Visitor
//{
//    /**
//     * @param ElementA $elementA
//     * @return void
//     */
//    public function visitElementA(ElementA $elementA): void;
//
//    /**
//     * @param ElementB $elementB
//     * @return void
//     */
//    public function visitElementB(ElementB $elementB): void;
//}
//
//abstract class Element
//{
//    /**
//     * @param Visitor $visitor
//     * @return void
//     */
//    public abstract function accept(Visitor $visitor): void;
//}
//
//class ElementA extends Element
//{
//    /**
//     * @param Visitor $visitor
//     * @return void
//     */
//    public function accept(Visitor $visitor): void
//    {
//        $visitor->visitElementA($this);
//    }
//
//    /**
//     * @return void
//     */
//    public function operationA(): void
//    {
//        echo 'Выполнение операции A<br>';
//    }
//}
//
//// Конкретный класс элемента B
//class ElementB extends Element
//{
//    /**
//     * @param Visitor $visitor
//     * @return void
//     */
//    public function accept(Visitor $visitor): void
//    {
//        $visitor->visitElementB($this);
//    }
//
//    /**
//     * @return void
//     */
//    public function operationB(): void
//    {
//        echo 'Выполнение операции B<br>';
//    }
//}
//
//// Конкретный посетитель
//class ConcreteVisitor implements Visitor
//{
//    /**
//     * @param ElementA $elementA
//     * @return void
//     */
//    public function visitElementA(ElementA $elementA): void
//    {
//        echo "Посетитель посещает элемент A<br>";
//        $elementA->operationA();
//    }
//
//    public function visitElementB(ElementB $elementB): void
//    {
//        echo "Посетитель посещает элемент B<br>";
//        $elementB->operationB();
//    }
//}
//
//$elementA = new ElementA();
//$elementB = new ElementB();
//
//$visitor = new ConcreteVisitor();
//
//$elementA->accept($visitor);
//$elementB->accept($visitor);
