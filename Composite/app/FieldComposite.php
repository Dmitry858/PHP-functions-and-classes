<?php 

declare(strict_types = 1);

namespace App;

/**
 * Базовый класс Контейнер реализует инфраструктуру для управления дочерними объектами, повторно используемую всеми конкретными Контейнерами.
 */
abstract class FieldComposite extends FormElement
{
    protected $fields = [];

    public function add(FormElement $elem): void
    {
        $name = $elem->getName();
        $this->fields[$name] = $elem;
    }

    public function remove(FormElement $elem): void
    {
        $name = $elem->getName();
        unset($this->fields[$name]);
    }

    public function setData($data): void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    public function getData(): array
    {
        $data = [];
        
        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }
        
        return $data;
    }

    public function render(): string
    {
        $output = '';
        
        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }
        
        return $output;
    }
}