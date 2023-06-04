<?php
//
///**
// * Создаёт механизм подписки, позволяющий одним объектам следить и реагировать на события,
// * происходящие в других объектах.
// */
//interface Observer
//{
//    /**
//     * @param string $data
//     * @return void
//     */
//    public function update(string $data): void;
//}
//
//class ConcreteObserver implements Observer
//{
//    /**
//     * @var string
//     */
//    private string $observerState;
//
//    /**
//     * @param string $data
//     * @return void
//     */
//    public function update(string $data): void
//    {
//        $this->observerState = $data;
//        echo "Наблюдатель получил обновление: $data\n";
//    }
//}
//
//interface Subject
//{
//    /**
//     * @param Observer $observer
//     * @return void
//     */
//    public function attach(Observer $observer): void;
//
//    /**
//     * @param Observer $observer
//     * @return void
//     */
//    public function detach(Observer $observer): void;
//
//    /**
//     * @return void
//     */
//    public function notify(): void;
//}
//
//class ConcreteSubject implements Subject
//{
//    /**
//     * @var array
//     */
//    private array $observers = array();
//    /**
//     * @var string
//     */
//    private string $subjectState;
//
//    /**
//     * @param Observer $observer
//     * @return void
//     */
//    public function attach(Observer $observer): void
//    {
//        $this->observers[] = $observer;
//        echo "Наблюдатель присоединен\n";
//    }
//
//    /**
//     * @param Observer $observer
//     * @return void
//     */
//    public function detach(Observer $observer): void
//    {
//        $index = array_search($observer, $this->observers);
//        if ($index !== false) {
//            unset($this->observers[$index]);
//            echo "Наблюдатель отсоединен\n";
//        }
//    }
//
//    /**
//     * @return void
//     */
//    public function notify(): void
//    {
//        foreach ($this->observers as $observer) {
//            $observer->update($this->subjectState);
//        }
//    }
//
//    /**
//     * @param string $state
//     * @return void
//     */
//    public function setState(string $state): void
//    {
//        $this->subjectState = $state;
//        $this->notify();
//    }
//}
//
//$subject = new ConcreteSubject();
//
//$observer1 = new ConcreteObserver();
//$observer2 = new ConcreteObserver();
//
//$subject->attach($observer1);
//$subject->attach($observer2);
//
//$subject->setState("Новое состояние");
//
//$subject->detach($observer2);
//
//$subject->setState("Еще одно состояние");
