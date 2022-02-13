<?php

require __DIR__ . '/vendor/autoload.php';

use App\FormElement;
use App\Form;
use App\Input;
use App\Fieldset;
use App\Button;

function getProductForm(): FormElement
{
    $form = new Form('product', 'Add product form', '/product/add');
    $form->add(new Input('name', 'Name', 'text'));
    $form->add(new Input('description', 'Description', 'text'));

    $picture = new Fieldset('photo', 'Product photo');
    $picture->add(new Input('caption', 'Caption', 'text'));
    $picture->add(new Input('image', 'Image', 'file'));
    $form->add($picture);

    $form->add(new Button('submit', 'Submit', 'submit'));

    return $form;
}

function loadProductData(FormElement $form)
{
    $data = [
        'name' => 'Apple MacBook',
        'description' => 'Apple MacBook is a macOS laptop',
        'photo' => [
            'caption' => 'Apple MacBook photo',
            'image' => 'photo.png',
        ],
    ];

    $form->setData($data);
}

function renderProduct(FormElement $form)
{
    echo $form->render();
}

$form = getProductForm();
loadProductData($form);
renderProduct($form);