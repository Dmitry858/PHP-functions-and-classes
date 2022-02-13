<?php 

declare(strict_types = 1);

namespace App;

/**
 * Это простой компонент, который не имеет вложенных компонентов.
 */
class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    public function render(): string
    {
        return '<label for="'.$this->name.'">'.$this->title.'</label><br>' .
               '<input name="'.$this->name.'" id="'.$this->name.'" type="'.$this->type.'" value="'.$this->data.'"><br>';
    }
}