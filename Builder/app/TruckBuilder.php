<?php

declare(strict_types = 1);

namespace App;

use App\Parts\Truck;
use App\Parts\Door;
use App\Parts\Wheel;
use App\Parts\Engine;
use App\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Door());
        $this->truck->setPart('rightDoor', new Door());
    }

    public function addWheels()
    {
        $i = 1;
        while ($i < 19)
        {
            $this->truck->setPart('wheel'.$i, new Wheel());
            $i++;
        }
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}