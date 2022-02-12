<?php 

declare(strict_types = 1);

namespace App;

/**
 * Интерфейс, которому следуют классы приложения.
 */
interface Notification
{
    public function send(string $title, string $message);
}