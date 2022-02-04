<?php

require __DIR__ . '/vendor/autoload.php';

use App\Director;
use App\TruckBuilder;

$builder = new TruckBuilder();
$director = new Director();
$director->build($builder);
$vehicle = $builder->getVehicle();

echo '<pre>';
var_dump($vehicle);
echo '</pre>';