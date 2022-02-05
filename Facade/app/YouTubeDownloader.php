<?php 

declare(strict_types = 1);

namespace App;

class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    public function downloadVideo(string $url): void
    {
        echo 'Fetching video metadata from youtube...';
        echo '<br>';
        // $title = $this->youtube->fetchVideo($url)->getTitle();

        echo 'Saving video file to a temporary file...';
        echo '<br>';
        // $this->youtube->saveAs($url, "video.mpg");

        echo 'Processing source video...';
        echo '<br>';
        // $video = $this->ffmpeg->open('video.mpg');

        echo 'Normalizing and resizing the video to smaller dimensions...';
        echo '<br>';
        // $video
        //     ->filters()
        //     ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
        //     ->synchronize();

        echo 'Capturing preview image...';
        echo '<br>';
        // $video
        //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        //     ->save($title . 'frame.jpg');

        echo 'Saving video in target formats...';
        echo '<br>';
        // $video
        //     ->save(new FFMpeg\Format\Video\X264(), $title . '.mp4')
        //     ->save(new FFMpeg\Format\Video\WMV(), $title . '.wmv')
        //     ->save(new FFMpeg\Format\Video\WebM(), $title . '.webm');

        echo 'Done!';
    }
}