<?php

/**
 * Разделяет один или несколько классов на две отдельные иерархии — абстракцию и реализацию,
 * позволяя изменять их независимо друг от друга.
 */
abstract class Abstraction
{
    /**
     * @var Implementation
     */
    protected Implementation $implementation;

    /**
     * @param Implementation $implementation
     */
    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @return mixed
     */
    abstract public function operation();
}

interface Implementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string;
}

// Конкретная реализация
class ConcreteImplementationA implements Implementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA operation\n";
    }
}

class ConcreteImplementationB implements Implementation
{
    /**
     * @return string
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB operation\n";
    }
}

class ConcreteAbstraction extends Abstraction
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "ConcreteAbstraction: " . $this->implementation->operationImplementation();
    }
}

$implementationA = new ConcreteImplementationA();
$abstraction = new ConcreteAbstraction($implementationA);
echo $abstraction->operation();

$implementationB = new ConcreteImplementationB();
$abstraction = new ConcreteAbstraction($implementationB);
echo $abstraction->operation();

#Sample 2

interface RenderText
{
    /**
     * @param $str
     * @return string
     */
    public function render($str): string;
}

class SimpleText implements RenderText
{
    /**
     * @param $str
     * @return string
     */
    public function render($str): string
    {
        return $str;
    }
}

class HTMLSimple implements RenderText
{
    /**
     * @param $str
     * @return string
     */
    public function render($str): string
    {
        return "<p>$str</p>";
    }
}

abstract class MakeBridge
{
    /**
     * @var RenderText
     */
    public RenderText $format;

    /**
     * @param RenderText $format
     */
    public function __construct(RenderText $format)
    {
        $this->format = $format;
    }

    /**
     * @param string $str
     * @return string
     */
    abstract public function getFormat(string $str): string;

}

class AllBridge extends MakeBridge
{

    public function getFormat(string $str): string
    {
        return $this->format->render($str);
    }
}

$SimpleText = new SimpleText();
$HTMLSimple = new HTMLSimple();

$bridge = new AllBridge($SimpleText);
var_dump($bridge->getFormat('Hello'));

$bridge = new AllBridge($HTMLSimple);
var_dump($bridge->getFormat('Hello'));
