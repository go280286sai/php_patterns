<?php

/**
 * Порождающий паттерн проектирования, который гарантирует, что у класса есть только один экземпляр,
 * и предоставляет к нему глобальную точку доступа.
 */
class Singleton
{
    /**
     * @var object|null
     */
    private static ?object $instance = null;

    /**
     * @return string
     */
    public function test(): string
    {
        return 'hello';
    }
    private function __construct()
    {
        //pass
    }

    /**
     * @return void
     */
    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return object
     */
    public static function instance(): object
    {
        if (self::$instance == null) {
            return self::$instance = new self;
        } else {
            return self::$instance;
        }
    }
}

$object = Singleton::instance();
echo $object->test();
