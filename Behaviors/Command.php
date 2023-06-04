<?php
//
///**
// * Превращает запросы в объекты, позволяя передавать их как аргументы при вызове методов, ставить запросы в очередь,
// * логировать их, а также поддерживать отмену операций.
// */
//interface Command
//{
//    /**
//     * @return void
//     */
//    public function execute(): void;
//}
//
//interface Receiver{
//    /**
//     * @return void
//     */
//    public function performAction(): void;
//}
//class ConcreteCommand1 implements Command
//{
//    /**
//     * @var Receiver
//     */
//    private Receiver $receiver;
//
//    public function __construct(Receiver $receiver)
//    {
//        $this->receiver = $receiver;
//    }
//
//    /**
//     * @return void
//     */
//    public function execute(): void
//    {
//        $this->receiver->performAction();
//    }
//}
//
//class ConcreteCommand2 implements Command
//{
//    /**
//     * @var Receiver
//     */
//    private Receiver $receiver;
//
//    public function __construct(Receiver $receiver)
//    {
//        $this->receiver = $receiver;
//    }
//
//    /**
//     * @return void
//     */
//    public function execute(): void
//    {
//        $this->receiver->performAction();
//    }
//}
//
//class ConcreteCommand3 implements Command
//{
//    /**
//     * @var Receiver
//     */
//    private Receiver $receiver;
//
//    public function __construct(Receiver $receiver)
//    {
//        $this->receiver = $receiver;
//    }
//
//    /**
//     * @return void
//     */
//    public function execute(): void
//    {
//        $this->receiver->performAction();
//    }
//}
//
//class Receiver1 implements Receiver
//{
//    /**
//     * @return void
//     */
//    public function performAction(): void
//    {
//        echo "Действие 1 выполнено\n";
//    }
//}
//
//class Receiver2 implements Receiver
//{
//    /**
//     * @return void
//     */
//    public function performAction(): void
//    {
//        echo "Действие 2 выполнено\n";
//    }
//}
//
//class Receiver3 implements Receiver
//{
//    /**
//     * @return void
//     */
//    public function performAction(): void
//    {
//        echo "Действие 3 выполнено\n";
//    }
//}
//
//class Invoker
//{
//    /**
//     * @var Command
//     */
//    private Command $command;
//
//    /**
//     * @param Command $command
//     * @return void
//     */
//    public function setCommand(Command $command): void
//    {
//        $this->command = $command;
//    }
//
//    /**
//     * @return void
//     */
//    public function executeCommand(): void
//    {
//        $this->command->execute();
//    }
//}
//
//$receiver1 = new Receiver1();
//$command1 = new ConcreteCommand1($receiver1);
//$invoker1 = new Invoker();
//
//$invoker1->setCommand($command1);
//$invoker1->executeCommand();
//
//$receiver2 = new Receiver2();
//$command2 = new ConcreteCommand2($receiver2);
//$invoker2 = new Invoker();
//
//$invoker2->setCommand($command2);
//$invoker2->executeCommand();
//
//$receiver3 = new Receiver3();
//$command3 = new ConcreteCommand3($receiver3);
//$invoker3 = new Invoker();
//
//$invoker3->setCommand($command3);
//$invoker3->executeCommand();
