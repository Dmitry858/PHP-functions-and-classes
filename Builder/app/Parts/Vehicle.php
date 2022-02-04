<?php 

declare(strict_types = 1);

namespace App\Parts;

abstract class Vehicle
{
    private $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}