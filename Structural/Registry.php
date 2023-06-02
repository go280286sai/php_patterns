<?php
//
///**
// * Для реализации централизованного хранения объектов.
// */
//abstract class Registry
//{
//    /**
//     * @var array
//     */
//    private static array $services = array();
//
//    /**
//     * @param string $key
//     * @param Service $service
//     * @return void
//     */
//    final public static function setService(string $key, Service $service): void
//    {
//        self::$services[$key] = $service;
//    }
//
//    /**
//     * @param string $key
//     * @return string|object
//     */
//    final public static function getService(string $key): string|object
//    {
//        if (isset(self::$services[$key])) {
//            return self::$services[$key];
//        }
//        return 'not found';
//    }
//}
//
//class Service
//{
//
//}
//
//$service = new Service();
//Registry::setService(1, $service);
//$result = Registry::getService(1);
//print_r($result);
