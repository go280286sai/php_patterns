<?php
//
///**
// * Интерфейс, определяющий общий контракт для реального объекта и заместителя
// */
//interface Subject
//{
//    /**
//     * @return void
//     */
//    public function request(): void;
//}
//
//class RealSubject implements Subject
//{
//    /**
//     * @return void
//     */
//    public function request(): void
//    {
//        echo "RealSubject: Обработка запроса.\n";
//    }
//}
//
//class Proxy implements Subject
//{
//    /**
//     * @var object|null
//     */
//    private ?object $realSubject = null;
//
//    /**
//     * @return void
//     */
//    public function request(): void
//    {
//        if ($this->realSubject === null) {
//            $this->realSubject = new RealSubject();
//        }
//        echo "Proxy: Подготовка перед выполнением запроса.\n";
//        $this->realSubject->request();
//        echo "Proxy: Завершение после выполнения запроса.\n";
//    }
//}
//
//$proxy = new Proxy();
//$proxy->request();
