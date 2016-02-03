<?php
class Book {

    function getTitle() {
        return "A Great Book";
    }

    function getAuthor() {
        return "John Doe";
    }

    function printCurrentPage() {
        echo "current page content";
    }
}

$book = new Book();
$book->printCurrentPage();
