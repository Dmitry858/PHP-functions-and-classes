<?php 

declare(strict_types = 1);

namespace App;

/**
 * Конкретная Стратегия реализуют алгоритм, следуя базовому интерфейсу Стратегии.
 */
class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}