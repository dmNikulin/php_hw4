<?php
class ElectronicBook extends Book {
    protected string $link;

    public function __construct(string $title, string $author, string $link) {
        parent::__construct($title, $author);
        $this -> link = $link;
    }

    function variation(): string {
        return $this -> $link;
    }
}