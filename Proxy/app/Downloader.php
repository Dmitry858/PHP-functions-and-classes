<?php 

declare(strict_types = 1);

namespace App;

interface Downloader
{
    public function download(string $url): string;
}