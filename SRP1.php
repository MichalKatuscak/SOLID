<?php

class Book {
 
    function getTitle() {
        return "A Great Book";
    }
 
    function getAuthor() {
        return "John Doe";
    }
 
    function getCurrentPage() {
        return "current page content";
    }
 
}
 
interface Printer {
 
    function printPage($page);
}
 
class PlainTextPrinter implements Printer {
 
    function printPage($page) {
        echo 'PlainText: ' . $page;
    }
 
}
 
class HtmlPrinter implements Printer {
 
    function printPage($page) {
        echo 'HTML: ' . $page;
    }
 
}

$book = new Book();

//$printer = new PlainTextPrinter();
$printer = new HtmlPrinter();
$page = $book->getCurrentPage();
$printer->printPage($page);