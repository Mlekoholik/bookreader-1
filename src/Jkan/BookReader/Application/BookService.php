<?php
/**
 * This file is part of the "bookReader" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace Jkan\BookReader\Application;

use Jkan\BookReader\Domain\BookShelf;

class BookService
{
    private $bookShelf;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }


    public function readBook($title, $pageNumber)
    {
        $book = $this->bookShelf->getBook($title);

        return $book->read($pageNumber);
    }
}