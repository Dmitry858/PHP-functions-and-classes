<?php

declare(strict_types = 1);

namespace App\Factories;

use App\Interfaces\GUIFactory;
use App\Interfaces\Button;
use App\Interfaces\Checkbox;
use App\Elements\WinButton;
use App\Elements\WinCheckbox;

class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton;
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox;
    }
}