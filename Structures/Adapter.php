<?php
//
///**
// *  Структурный паттерн проектирования, который позволяет объектам с несовместимыми интерфейсами работать вместе.
// */
//
//// Интерфейс, который ожидается использовать в клиентском коде
//interface TargetInterface
//{
//    /**
//     * @return string
//     */
//    public function request(): string;
//}
//
//// Класс, который требуется адаптировать
//class Adaptee
//{
//    /**
//     * @return string
//     */
//    public function specificRequest(): string
//    {
//        return "Specific request.";
//    }
//}
//
//class Adapter implements TargetInterface
//{
//    /**
//     * @var Adaptee
//     */
//    private Adaptee $adaptee;
//
//    /**
//     * @param Adaptee $adaptee
//     */
//    public function __construct(Adaptee $adaptee)
//    {
//        $this->adaptee = $adaptee;
//    }
//
//    /**
//     * @return string
//     */
//    public function request(): string
//    {
//        return "Adapter: " . $this->adaptee->specificRequest();
//    }
//}
//
//function clientCode(TargetInterface $target): void
//{
//    echo $target->request();
//}
//
//$adaptee = new Adaptee();
//$adapter = new Adapter($adaptee);
//
//clientCode($adapter);
//
//#Example 2
//
//interface Salary
//{
//    /**
//     * @return mixed
//     */
//    public function countSalary(): mixed;
//}
//
//interface SalaryByHour
//{
//    /**
//     * @return mixed
//     */
//    public function countSalaryByHour(): mixed;
//}
//
//class WorkerSalary implements Salary
//{
//    /**
//     * @return float|int
//     */
//    public function countSalary(): float|int
//    {
//        return 20 * 1200;
//    }
//}
//
//class HoursSalary implements SalaryByHour
//{
//    /**
//     * @var int|float
//     */
//    private int|float $hours;
//
//    /**
//     * @param int|float $hours
//     */
//    public function __construct(int|float $hours)
//    {
//        $this->hours = $hours;
//    }
//
//    /**
//     * @return int|float
//     */
//    public function countSalaryByHour(): int|float
//    {
//        return 150 * $this->hours;
//    }
//}
//
//class WorkerHoursAdapter implements Salary
//{
//    /**
//     * @var WorkerSalary
//     */
//    private WorkerSalary $workerSalary;
//    /**
//     * @var int|float
//     */
//    private int|float $countSalaryByHour;
//
//    /**
//     * @param WorkerSalary $workerSalary
//     */
//    public function __construct(WorkerSalary $workerSalary)
//    {
//        $this->workerSalary = $workerSalary;
//    }
//
//    /**
//     * @return float|int
//     */
//    public function countSalary(): float|int
//    {
//        return $this->workerSalary->countSalary();
//    }
//
//    /**
//     * @return float|int
//     */
//    public function total(): float|int
//    {
//        return $this->countSalary() + $this->countSalaryByHour;
//    }
//
//    /**
//     * @param SalaryByHour $salaryByHour
//     * @return float|int
//     */
//    public function countSalaryByHour(SalaryByHour $salaryByHour): float|int
//    {
//        $this->countSalaryByHour = $salaryByHour->countSalaryByHour();
//        return $this->countSalaryByHour;
//    }
//}
//
//echo "\n";
//$salary = new WorkerSalary();
//echo $salary->countSalary();
//echo "\n";
//$hours_salary = new HoursSalary(20);
//echo $hours_salary->countSalaryByHour();
//echo "\n";
//$total = new WorkerHoursAdapter($salary);
//echo $total->countSalary();
//echo "\n";
//echo $total->countSalaryByHour($hours_salary);
//echo "\n";
//echo $total->total();
