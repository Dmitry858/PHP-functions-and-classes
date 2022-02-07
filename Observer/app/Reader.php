<?php 

declare(strict_types = 1);

namespace App;

class Reader implements \SplObserver
{
    public $id;
    private $name;
   
    public function __construct(string $name)
    {
        $this->id = rand(1, 1000);
        $this->name = $name;
    }
   
    public function update(\SplSubject $subject): void
    {
        echo $this->name.' прочитал новость <strong>'.$subject->content.'</strong> ('.$subject->name.')<br>';
    }
}