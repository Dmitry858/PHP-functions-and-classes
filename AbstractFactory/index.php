<?php

require __DIR__ . '/vendor/autoload.php';

use App\Interfaces\GUIFactory;
use App\Factories\WinFactory;
use App\Factories\MacFactory;

function clientCode(GUIFactory $factory)
{
    echo '<pre>';
    echo $factory->createButton()->paint();
    echo '</pre>';
    echo '<pre>';
    echo $factory->createCheckbox()->paint();
    echo '</pre>';
}

clientCode(new WinFactory);
echo '<br>';
clientCode(new MacFactory);
