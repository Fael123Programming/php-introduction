<?php 
    class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($title, $author, $pages) {
            $this->title = $title; //Do not use '$'.
            $this->author = $author;
            $this->pages = $pages;
            //$this refers to the very current instance being created.
        }
    }
?>