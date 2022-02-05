<?php

require __DIR__ . '/vendor/autoload.php';

use App\YouTubeDownloader;

$facade = new YouTubeDownloader('APIKEY-XXXXXXXXX');
$facade->downloadVideo('https://www.youtube.com/watch?v=73rt0PD5AYA');