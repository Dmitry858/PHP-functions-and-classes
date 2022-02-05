<?php 

declare(strict_types = 1);

namespace App;

/**
 * Подсистема FFmpeg (сложная библиотека работы с видео/аудио).
 */
class FFMpeg
{
    public static function create(): FFMpeg { /* ... */ }

    public function open(string $video): void { /* ... */ }

    // ...дополнительные методы и классы...
}