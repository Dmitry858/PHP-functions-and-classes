<?php

declare(strict_types = 1);

namespace App\Factories;

use App\Interfaces\GUIFactory;
use App\Interfaces\Button;
use App\Interfaces\Checkbox;
use App\Elements\MacButton;
use App\Elements\MacCheckbox;

class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton;
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox;
    }
}