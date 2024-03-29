<?php 

declare(strict_types = 1);

namespace App;

use App\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addEngine();

    public function addDoors();

    public function addWheels();

    public function getVehicle(): Vehicle;
}