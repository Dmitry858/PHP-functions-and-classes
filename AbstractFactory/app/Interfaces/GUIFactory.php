<?php

declare(strict_types = 1);

namespace App\Interfaces;

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckbox(): Checkbox;
}