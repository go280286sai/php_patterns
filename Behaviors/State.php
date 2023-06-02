<?php
//
///**
// * Позволяет объектам менять поведение в зависимости от своего состояния.
// * Извне создаётся впечатление, что изменился класс объекта.
// */
//interface State
//{
//    /**
//     * @param OrderContext $context
//     * @return void
//     */
//    public function proceedToNext(OrderContext $context): void;
//
//    /**
//     * @return string
//     */
//    public function toString(): string;
//}
//
//class StateCreated implements State
//{
//    /**
//     * @param OrderContext $context
//     * @return void
//     */
//    public function proceedToNext(OrderContext $context): void
//    {
//        $context->setState(new StateShipped());
//    }
//
//    /**
//     * @return string
//     */
//    public function toString(): string
//    {
//        return 'created';
//    }
//}
//
//class StateShipped implements State
//{
//    /**
//     * @param OrderContext $context
//     * @return void
//     */
//    public function proceedToNext(OrderContext $context): void
//    {
//        $context->setState(new StateDone());
//    }
//
//    /**
//     * @return string
//     */
//    public function toString(): string
//    {
//        return 'shipped';
//    }
//}
//
//class StateDone implements State
//{
//    /**
//     * @param OrderContext $context
//     * @return void
//     */
//    public function proceedToNext(OrderContext $context): void
//    {
//        // there is nothing more to do
//    }
//
//    /**
//     * @return string
//     */
//    public function toString(): string
//    {
//        return 'done';
//    }
//}
//
//
//class OrderContext
//{
//    /**
//     * @var State
//     */
//    private State $state;
//
//    /**
//     * @return OrderContext
//     */
//    public static function create(): OrderContext
//    {
//        $order = new self();
//        $order->state = new StateCreated();
//
//        return $order;
//    }
//
//    /**
//     * @param State $state
//     * @return void
//     */
//    public function setState(State $state): void
//    {
//        $this->state = $state;
//    }
//
//    /**
//     * @return void
//     */
//    public function proceedToNext(): void
//    {
//        $this->state->proceedToNext($this);
//    }
//
//    /**
//     * @return string
//     */
//    public function toString(): string
//    {
//        return $this->state->toString();
//    }
//}
//
//$object = OrderContext::create();
//var_dump($object->toString());
//$object->proceedToNext();
//var_dump($object->toString());
//$object->proceedToNext();
//var_dump($object->toString());
//
//#Sample 2
//
//interface States
//{
//    /**
//     * @param Task $task
//     * @return void
//     */
//    public function toNext(Task $task): void;
//
//    /**
//     * @return string
//     */
//    public function getState(): string;
//}
//
//class Create implements States
//{
//    /**
//     * @param Task $task
//     * @return void
//     */
//    public function toNext(Task $task): void
//    {
//        $task->setState(new Accept());
//    }
//
//    /**
//     * @return string
//     */
//    public function getState(): string
//    {
//        return "Create";
//    }
//}
//
//class Accept implements States
//{
//    /**
//     * @param Task $task
//     * @return void
//     */
//    public function toNext(Task $task): void
//    {
//        $task->setState(new Process());
//    }
//
//    /**
//     * @return string
//     */
//    public function getState(): string
//    {
//        return "Accept";
//    }
//}
//
//class Process implements States
//{
//    /**
//     * @param Task $task
//     * @return void
//     */
//    public function toNext(Task $task): void
//    {
//        $task->setState(new Done());
//    }
//
//    /**
//     * @return string
//     */
//    public function getState(): string
//    {
//        return "Process";
//    }
//}
//
//class Done implements States
//{
//    /**
//     * @param Task $task
//     * @return void
//     */
//    public function toNext(Task $task): void
//    {
//        // TODO: Implement toNext() method.
//    }
//
//    /**
//     * @return string
//     */
//    public function getState(): string
//    {
//        return "Done";
//    }
//}
//
//class Task
//{
//    /**
//     * @var States
//     */
//    private States $state;
//
//    /**
//     * @return string
//     */
//    public function getState(): string
//    {
//        return $this->state->getState();
//    }
//
//    /**
//     * @param States $state
//     */
//    public function setState(States $state)
//    {
//        $this->state = $state;
//    }
//
//    /**
//     * @return void
//     */
//    public function toNext(): void
//    {
//        $this->state->toNext($this);
//    }
//
//    /**
//     * @return Task
//     */
//    public static function make(): Task
//    {
//        $self = new self();
//        $self->state = new Create();
//        return $self;
//    }
//}
//
//$object2 = Task::make();
//var_dump($object2->getState());
//$object2->toNext();
//var_dump($object2->getState());
//$object2->toNext();
//var_dump($object2->getState());
//$object2->toNext();
//var_dump($object2->getState());
