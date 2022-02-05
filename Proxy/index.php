<?php

require __DIR__ . '/vendor/autoload.php';

use App\SimpleDownloader;
use App\CachingDownloader;

$realSubject = new SimpleDownloader();
$proxy = new CachingDownloader($realSubject);
$result = $proxy->download('https://example.com/');
$result = $proxy->download('https://example.com/');