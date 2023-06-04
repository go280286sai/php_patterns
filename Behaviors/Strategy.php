<?php

/**
 * Определяет семейство схожих алгоритмов и помещает каждый из них в собственный класс, после чего алгоритмы можно
 * взаимозаменять прямо во время исполнения программы.
 */

interface Strategy
{
    /**
     * @param int $data
     * @param int|float $price
     * @return int|float
     */
    public function execute(int $data, int|float $price): int|float;
}

class Sale implements Strategy
{
    /**
     * @param int $data
     * @param int|float $price
     * @return int|float
     */
    public function execute(int $data, int|float $price): int|float
    {
        return $data * $price;
    }
}

class SalaryHour implements Strategy
{
    /**
     * @param $data
     * @param int|float $price
     * @return float|int
     */
    public function execute($data, int|float $price): float|int
    {

        return $data * $price;
    }
}


class Context
{
    /**
     * @var Strategy
     */
    private Strategy $strategy;

    /**
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param int $data
     * @param int|float $price
     * @return int|float
     */
    public function executeStrategy(int $data, int|float $price): int|float
    {
        return $this->strategy->execute($data, $price);
    }
}

$strategy1 = new Sale();
$strategy2 = new SalaryHour();

$context1 = new Context($strategy1);
$context2 = new Context($strategy2);

$result1 = $context1->executeStrategy(1, 1200);
$result2 = $context2->executeStrategy(5, 140);

var_dump($result1);
var_dump($result2);
