<?php 

declare(strict_types = 1);

namespace App;

/**
 * Пример класса, который реализует целевой интерфейс.
 */
class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
        echo '<br>';
    }
}