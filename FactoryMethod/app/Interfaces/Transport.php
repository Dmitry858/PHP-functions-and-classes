<?php

declare(strict_types = 1);

namespace App\Interfaces;

interface Transport
{
    public function load(): void;

    public function deliver(string $cargo): void;
    
    public function unload(): void;
}