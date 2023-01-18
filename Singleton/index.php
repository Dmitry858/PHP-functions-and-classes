<?php

class Singleton
{
    private $props = [];
    private static $instance;

    // запрещаем прямое создание
    private function __construct()
    {
    }

    // запрещаем клонирование
    private function __clone()
    {
    }

    // запрещаем десериализацию
    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance))
        {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty($key)
    {
        return $this->props[$key];
    }
}


// пример использования
$singleton = Singleton::getInstance();
$singleton->setProperty('name', 'Одиночка');
unset($singleton);

$singleton2 = Singleton::getInstance();
$name = $singleton2->getProperty('name');
var_dump($name); // значение не утрачено