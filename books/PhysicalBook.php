<?php

class PhysicalBook extends Book {
    protected string $libAddress;

    public function __construct(string $title, string $author, string $libAddress) {
        parent::__construct($title, $author);
        $this -> libAddress = $libAddress;
    }

    function variation(): string {
        return $this -> $libAddress;
    }
}