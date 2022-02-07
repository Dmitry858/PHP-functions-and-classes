<?php

require __DIR__ . '/vendor/autoload.php';

use App\Newspaper;
use App\Reader;

$newspaper = new Newspaper('Известия');

$vasya = new Reader('Вася');
$petya = new Reader('Петя');
$ivan = new Reader('Иван');

$newspaper->attach($vasya);
$newspaper->attach($petya);
$newspaper->attach($ivan);

$newspaper->detach($vasya);

$newspaper->breakoutNews('Невероятные события!');