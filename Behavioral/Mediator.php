<?php

/**
 * Позволяет уменьшить связанность множества классов между собой,
 * благодаря перемещению этих связей в один класс-посредник.
 */

interface Mediator
{
    /**
     * @param Component $sender
     * @param $event string
     * @return void
     */
    public function notify(Component $sender, string $event): void;
}

// Абстрактный компонент
abstract class Component
{
    /**
     * @var Mediator
     */
    protected Mediator $mediator;

    /**
     * @param Mediator $mediator
     * @return void
     */
    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    /**
     * @param $event string
     * @return void
     */
    public function send(string $event): void
    {
        $this->mediator->notify($this, $event);
    }

    /**
     * @param $event string
     * @return void
     */
    abstract public function receive(string $event): void;
}

class ConcreteComponent1 extends Component
{
    /**
     * @param $event string
     * @return void
     */
    public function receive(string $event): void
    {
        echo "Компонент 1 получил событие: " . $event . "\n";
    }
}

class ConcreteComponent2 extends Component
{
    public function receive(string $event): void
    {
        echo "Компонент 2 получил событие: " . $event . "\n";
    }
}

class ConcreteMediator implements Mediator
{
    /**
     * @var ConcreteComponent1
     */
    private ConcreteComponent1 $component1;
    /**
     * @var ConcreteComponent2
     */
    private ConcreteComponent2 $component2;

    /**
     * @param ConcreteComponent1 $component1
     * @return void
     */
    public function setComponent1(ConcreteComponent1 $component1): void
    {
        $this->component1 = $component1;
    }

    /**
     * @param ConcreteComponent2 $component2
     * @return void
     */
    public function setComponent2(ConcreteComponent2 $component2): void
    {
        $this->component2 = $component2;
    }

    /**
     * @param Component $sender
     * @param string $event
     * @return void
     */
    public function notify(Component $sender, string $event): void
    {
        if ($sender === $this->component1) {
            $this->component2->receive($event);
        } elseif ($sender === $this->component2) {
            $this->component1->receive($event);
        }
    }
}

$component1 = new ConcreteComponent1();
$component2 = new ConcreteComponent2();

$mediator = new ConcreteMediator();
$mediator->setComponent1($component1);
$mediator->setComponent2($component2);

$component1->setMediator($mediator);
$component2->setMediator($mediator);

$component1->send("Событие от компонента 1");

$component2->send("Событие от компонента 2");
