<?php

declare(strict_types = 1);

namespace App\Vehicles;

use App\Interfaces\Transport;

class Plane implements Transport
{
    public function load(): void
    {
        echo 'The plane is loading.';
        echo '<br>';
    }

    public function deliver(string $cargo): void
    {
        echo 'The plane is delivering '.$cargo.'.';
        echo '<br>';
    }

    public function unload(): void
    {
        echo 'The plane is unloading.';
        echo '<br>';
    }
}