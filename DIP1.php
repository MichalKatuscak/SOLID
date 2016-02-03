<?php

interface EBook {
    function read();
}

class EBookReader {

    private $book;

    function __construct(EBook $book) {
        $this->book = $book;
    }

    function read() {
        return $this->book->read();
    }

}

class PDFBook implements EBook {

    function read() {
        return "Reading a pdf book.";
    }
}

class MobiBook implements EBook {

    function read() {
        return "Reading a mobi book.";
    }
}

// Main process
$b = new PDFBook();
//$b = new MobiBook();
$r = new EBookReader($b);
echo $r->read();