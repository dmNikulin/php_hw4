<?php
class BookShelf {
    protected array $books;

    public function __construct(array $books) {
        $this->books = [];
    }

    public function addBook(Book $book):void {
        $this -> books[]= $book;
    }
}