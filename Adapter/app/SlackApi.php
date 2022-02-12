<?php 

declare(strict_types = 1);

namespace App;

/**
 * Адаптируемый класс – некий полезный класс, несовместимый с целевым интерфейсом.
 */
class SlackApi
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->login}'.";
        echo '<br>';
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.";
        echo '<br>';
    }
}