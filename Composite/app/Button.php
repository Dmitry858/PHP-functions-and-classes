<?php 

declare(strict_types = 1);

namespace App;

/**
 * Это простой компонент, который не имеет вложенных компонентов.
 */
class Button extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    public function render(): string
    {
        return '<button name="'.$this->name.'" type="'.$this->type.'">'.$this->title.'</button>';
    }
}