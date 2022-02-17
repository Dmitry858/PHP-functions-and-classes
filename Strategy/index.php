<?php

require __DIR__ . '/vendor/autoload.php';

use App\Context;
use App\ConcreteStrategyA;
use App\ConcreteStrategyB;

/**
 * Клиентский код выбирает конкретную стратегию и передаёт её в контекст. 
 * Клиент должен знать о различиях между стратегиями, чтобы сделать правильный выбор.
 */
$context = new Context(new ConcreteStrategyA());
echo 'Client: Strategy is set to normal sorting. <br>';
$context->doSomeBusinessLogic();

echo '<br>';

echo 'Client: Strategy is set to reverse sorting. <br>';
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();
