<?php

/**
 * Позволяет сохранять и восстанавливать прошлые состояния объектов, не раскрывая подробностей их реализации.
 */
class Originator
{
    /**
     * @var string
     */
    private string $state;

    /**
     * @param $state string
     * @return void
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return object
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return object
     */
    public function saveToMemento(): object
    {
        return new Memento($this->state);
    }

    /**
     * @param Memento $memento
     * @return void
     */
    public function restoreFromMemento(Memento $memento): void
    {
        $this->state = $memento->getState();
    }
}

class Memento
{
    /**
     * @var string
     */
    private string $state;

    /**
     * @param string $state
     */
    public function __construct(string $state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}

class Caretaker
{
    /**
     * @var array
     */
    private array $mementos = array();

    /**
     * @param Memento $memento
     * @return void
     */
    public function addMemento(Memento $memento): void
    {
        $this->mementos[] = $memento;
    }

    /**
     * @param $index
     * @return mixed
     */
    public function getMemento($index): mixed
    {
        return $this->mementos[$index];
    }
}

$originator = new Originator();
$caretaker = new Caretaker();

$originator->setState("Состояние 1");
$caretaker->addMemento($originator->saveToMemento());

$originator->setState("Состояние 2");
$caretaker->addMemento($originator->saveToMemento());

$originator->setState("Состояние 3");
$caretaker->addMemento($originator->saveToMemento());

$originator->restoreFromMemento($caretaker->getMemento(2));
echo "Текущее состояние: " . $originator->getState();
