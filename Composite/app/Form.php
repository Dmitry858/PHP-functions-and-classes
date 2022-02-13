<?php 

declare(strict_types = 1);

namespace App;

/**
 * Это пример конкретного Контейнера.
 */
class Form extends FieldComposite
{
    protected $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return '<form action="'.$this->url.'"><h3>'.$this->title.'</h3>'.$output.'</form>';
    }
}