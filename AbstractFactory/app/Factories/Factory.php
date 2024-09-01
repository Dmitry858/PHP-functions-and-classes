<?php

namespace App\Factories;

use App\Enums\Os;
use App\Interfaces\GUIFactory;

class Factory
{
    public static function make(Os $os): GUIFactory
    {
        return match ($os) {
            Os::Win => new WinFactory,
            Os::Mac => new MacFactory,
        };
    }
}