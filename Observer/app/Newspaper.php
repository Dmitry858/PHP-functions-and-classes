<?php 

declare(strict_types = 1);

namespace App;

class Newspaper implements \SplSubject
{
    public $name;
    public $content;
    private $observers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers[$observer->id] = $observer;
    }
   
    public function detach(\SplObserver $observer): void
    {
        if (array_key_exists($observer->id, $this->observers))
        {
            unset($this->observers[$observer->id]);
        }
    }

    public function breakoutNews(string $content): void
    {
        $this->content = $content;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) 
        {
            $observer->update($this);
        }
    }
}