<?php

declare(strict_types = 1);

namespace App\Elements;

use App\Interfaces\Button;

class MacButton implements Button
{
    public function paint(): string
    {
        return '
            ----------------------
            |        MacBtn      |
            ----------------------
        ';
    }
}