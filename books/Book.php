<?php

abstract class Book {
    protected string $title;
    protected string $author;
    protected int $quanityOfReading;

    public function __construct(string $title, string $author, int $quanityOfReading) {
        $this->title =  $title;
        $this->author =  $author;
        $this->quanityOfReading =  0;
    }

    abstract function getBook();
    abstract function returnBook();
    abstract function variation();
    
    function addQuanityReading(){
        $this -> $quanityOfReading++;
    }
    function getQuanity(){
        $this -> $quanityOfReading;
    }
}