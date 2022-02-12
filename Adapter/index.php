<?php

require __DIR__ . '/vendor/autoload.php';

use App\Notification;
use App\EmailNotification;
use App\SlackNotification;
use App\SlackApi;

function clientCode(Notification $notification)
{
    // ...
    echo $notification->send("Website is down!", "Alert! Our website is not responding. Call admins and bring it up!");
    // ...
}

echo "Client code is designed correctly and works with email notifications: <br>";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "<br>";

echo "The same client code can work with other classes via adapter: <br>";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);