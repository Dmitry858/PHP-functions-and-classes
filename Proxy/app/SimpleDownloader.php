<?php 

declare(strict_types = 1);

namespace App;

class SimpleDownloader implements Downloader
{
    public function download(string $url): string
    {
        echo 'Downloading a file from the Internet.';
        echo '<br>';
        $result = file_get_contents($url);
        echo 'Downloaded bytes: ' . strlen($result) . '<br>';

        return $result;
    }
}