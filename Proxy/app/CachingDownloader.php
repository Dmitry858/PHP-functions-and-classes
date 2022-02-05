<?php 

declare(strict_types = 1);

namespace App;

class CachingDownloader implements Downloader
{
    private $downloader;

    private $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) 
        {
            echo 'CacheProxy miss.';
            echo '<br>';
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
            return $result;
        } 
        else 
        {
            echo 'CacheProxy hit. Retrieving result from cache.';
            return $this->cache[$url];
        }
    }
}