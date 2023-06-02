<?php

///**
// * Интерфейс выражения
// */
//interface Expression
//{
//    /**
//     * @param Context $context
//     * @return mixed
//     */
//    public function interpret(Context $context): mixed;
//}
//
//class Context
//{
//    /**
//     * @var array
//     */
//    private array $data = array();
//
//    /**
//     * @param int|string $key
//     * @param string $value
//     * @return void
//     */
//    public function setData(int|string $key, string $value): void
//    {
//        $this->data[$key] = $value;
//    }
//
//    /**
//     * @param int|string $key
//     * @return mixed
//     */
//    public function getData(int|string $key): mixed
//    {
//        return $this->data[$key];
//    }
//}
//
//class VariableExpression implements Expression
//{
//    /**
//     * @var string
//     */
//    private string $name;
//
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @param Context $context
//     * @return mixed
//     */
//    public function interpret(Context $context): mixed
//    {
//        return $context->getData($this->name);
//    }
//}
//
//// Нетерминальное выражение
//class AddExpression implements Expression
//{
//    /**
//     * @var Expression
//     */
//    private Expression $leftExpression;
//    /**
//     * @var Expression
//     */
//    private Expression $rightExpression;
//
//    /**
//     * @param Expression $leftExpression
//     * @param Expression $rightExpression
//     */
//    public function __construct(Expression $leftExpression, Expression $rightExpression)
//    {
//        $this->leftExpression = $leftExpression;
//        $this->rightExpression = $rightExpression;
//    }
//
//    /**
//     * @param Context $context
//     * @return mixed
//     */
//    public function interpret(Context $context): mixed
//    {
//        $leftValue = $this->leftExpression->interpret($context);
//        $rightValue = $this->rightExpression->interpret($context);
//        return $leftValue + $rightValue;
//    }
//}
//
//$context = new Context();
//
//$variableX = new VariableExpression('X');
//$variableY = new VariableExpression('Y');
//
//$context->setData('X', 5);
//$context->setData('Y', 10);
//
//$expression = new AddExpression($variableX, $variableY);
//$result = $expression->interpret($context);
//
//echo "Результат: " . $result;
