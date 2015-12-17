<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/services.php';

$bookTitle = $argv[1];
$bookPage = $argv[2];

echo $c->bookService->readBook($bookTitle, $bookPage);
