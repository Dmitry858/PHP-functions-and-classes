<?php

declare(strict_types = 1);

namespace App\Elements;

use App\Interfaces\Checkbox;

class MacCheckbox implements Checkbox
{
    public function paint(): string
    {
        return '
            -------
            | Mac |
            -------
        ';
    }
}