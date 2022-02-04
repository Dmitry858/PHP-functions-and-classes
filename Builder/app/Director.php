<?php

declare(strict_types = 1);

namespace App;

class Director
{
    public function build(BuilderInterface $builder): void
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addDoors();
        $builder->addWheels();
    }
}