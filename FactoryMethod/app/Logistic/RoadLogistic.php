<?php

declare(strict_types = 1);

namespace App\Logistic;

use App\Interfaces\Transport;
use App\Vehicles\Truck;

class RoadLogistic extends Logistic
{
    public function getTransport(): Transport
    {
        return new Truck;
    }
}