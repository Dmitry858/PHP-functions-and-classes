<?php

require __DIR__ . '/vendor/autoload.php';

use App\Logistic\Logistic;
use App\Logistic\AirLogistic;
use App\Logistic\RoadLogistic;

function clientCode(Logistic $logistic, string $cargo): void
{
    $logistic->deliverCargo($cargo);
}

clientCode(new AirLogistic, 'milk');
echo '<br>';
clientCode(new RoadLogistic, 'books');
