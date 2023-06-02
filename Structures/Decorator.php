<?php
//
///**
// * Интерфейс, определяющий базовые операции, которые должны выполнять декораторы и конкретные компоненты
// */
//interface ComponentInterface
//{
//    /**
//     * @return string
//     */
//    public function operation(): string;
//}
//
//class ConcreteComponent implements ComponentInterface
//{
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return 'ConcreteComponent: базовая операция';
//    }
//}
//
//abstract class Decorator implements ComponentInterface
//{
//    /**
//     * @var ComponentInterface
//     */
//    protected ComponentInterface $component;
//
//    /**
//     * @param ComponentInterface $component
//     */
//    public function __construct(ComponentInterface $component)
//    {
//        $this->component = $component;
//    }
//
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return $this->component->operation();
//    }
//}
//
//class ConcreteDecoratorA extends Decorator
//{
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return 'ConcreteDecoratorA: перед выполнением операции<br>' . parent::operation() . '<br>ConcreteDecoratorA: после выполнения операции';
//    }
//}
//
//class ConcreteDecoratorB extends Decorator
//{
//    /**
//     * @return string
//     */
//    public function operation(): string
//    {
//        return 'ConcreteDecoratorB: перед выполнением операции<br>' . parent::operation() . '<br>ConcreteDecoratorB: после выполнения операции';
//    }
//}
//
//$component = new ConcreteComponent();
//$decoratorA = new ConcreteDecoratorA($component);
//$decoratorB = new ConcreteDecoratorB($decoratorA);
//
//echo $decoratorB->operation();
