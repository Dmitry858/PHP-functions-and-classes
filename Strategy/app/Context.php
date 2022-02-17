<?php 

declare(strict_types = 1);

namespace App;

/**
 * Контекст хранит ссылку на один из объектов Стратегии. Контекст не знает конкретного класса стратегии. Он должен работать со всеми стратегиями через интерфейс Стратегии.
 */
class Context
{
    private $strategy;

    /**
     * Обычно Контекст принимает стратегию через конструктор.
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Обычно Контекст позволяет заменить объект Стратегии во время выполнения.
     */
    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * Вместо того, чтобы самостоятельно реализовывать множественные версии алгоритма, Контекст делегирует некоторую работу объекту Стратегии.
     */
    public function doSomeBusinessLogic(): void
    {
        echo 'Context: Sorting data using the strategy. <br>';
        $result = $this->strategy->doAlgorithm([4, 2, 8, 3, 5]);
        echo implode(', ', $result) . '<br>';
    }
}