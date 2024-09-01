<?php

require __DIR__ . '/vendor/autoload.php';

use App\Enums\Os;
use App\Factories\Factory;
use App\Interfaces\GUIFactory;

function clientCode(GUIFactory $factory)
{
    echo '<pre>';
    echo $factory->createButton()->paint();
    echo '</pre>';
    echo '<pre>';
    echo $factory->createCheckbox()->paint();
    echo '</pre>';
}

$factory = Factory::make(Os::Win);
clientCode($factory);
