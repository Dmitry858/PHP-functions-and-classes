<?php

declare(strict_types = 1);

namespace App\Vehicles;

use App\Interfaces\Transport;

class Truck implements Transport
{
    public function load(): void
    {
        echo 'The truck is loading.';
        echo '<br>';
    }

    public function deliver(string $cargo): void
    {
        echo 'The truck is delivering '.$cargo.'.';
        echo '<br>';
    }

    public function unload(): void
    {
        echo 'The truck is unloading.';
        echo '<br>';
    }
}