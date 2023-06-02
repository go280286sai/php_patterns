<?php
//
///**
// * Набор заранее инициализированных объектов, готовых к использованию («пул»), что не требует каждый раз
// * создавать и уничтожать их.
// */
//class WorkerPool
//{
//    /**
//     * @var array
//     */
//    private array $freeWorks = array();
//    /**
//     * @var array
//     */
//    private array $busyWorks = array();
//    /**
//     * @var string
//     */
//    private string $key;
//
//    /**
//     * @return mixed
//     */
//    public function getWorker(): mixed
//    {
//        if (count($this->freeWorks) === 0) {
//            $worker = new Worker();
//        } else {
//            $worker = array_pop($this->freeWorks);
//        }
//        $this->busyWorks[spl_object_hash($worker)] = $worker;
//        $this->key = spl_object_hash($worker);
//        return $worker;
//    }
//
//    /**
//     * @return array
//     */
//    public function getFreeWorks(): array
//    {
//        return $this->freeWorks;
//    }
//
//    /**
//     * @return array
//     */
//    public function getBusyWorks(): array
//    {
//        return $this->busyWorks;
//    }
//
//    /**
//     * @return void
//     */
//    public function unsetWorker(): void
//    {
//        $this->freeWorks[$this->key] = $this->busyWorks[$this->key];
//        unset($this->busyWorks[$this->key]);
//    }
//}
//
//class Worker
//{
//    /**
//     * @return string
//     */
//    public function work(): string
//    {
//        return 'Worker number';
//    }
//}
//
//$pool = new WorkerPool();
//$pool->getWorker();
//print_r($pool->getBusyWorks());
//print_r($pool->getFreeWorks());
//$pool->unsetWorker();
//print_r($pool->getBusyWorks());
//print_r($pool->getFreeWorks());
