<?php

class PDFReader {

    private $book;

    function __construct(PDFBook $book) {
        $this->book = $book;
    }

    function read() {
        return $this->book->read();
    }

}

class PDFBook {

    function read() {
        return "Reading a pdf book";
    }
}
// Main process
$b = new PDFBook();
$r = new PDFReader($b);
echo $r->read();