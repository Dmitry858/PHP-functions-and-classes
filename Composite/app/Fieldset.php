<?php 

declare(strict_types = 1);

namespace App;

/**
 * Это пример конкретного Контейнера.
 */
class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();
        
        return '<fieldset><legend>'.$this->title.'</legend><br>'.$output.'</fieldset><br>';
    }
}