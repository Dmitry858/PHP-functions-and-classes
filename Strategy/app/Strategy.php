<?php 

declare(strict_types = 1);

namespace App;

/**
 * Интерфейс Стратегии объявляет операции, общие для всех поддерживаемых версий некоторого алгоритма.
 */
interface Strategy
{
    public function doAlgorithm(array $data): array;
}