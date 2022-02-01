<?php

require __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Page;

$author = new Author('Иван Иванов');
$page = new Page('Заголовок', 'Контент страницы', $author);
$page->addComment('Комментарий');

$draft = clone $page;

echo '<pre>';
var_dump($draft);
echo '</pre>';