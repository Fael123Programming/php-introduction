<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>
</head>
<body>
    <?php 
        echo "<h1>A class is nothing but a classification for a custom datatype.</h1>";
        include 'book.php';
        $book1 = new Book; //Instantiating without having created a constructor myself.
        $book1->title = 'Harry Potter';
        $book1->author = 'JK Rowling';
        $book1->pages = 400;
        echo $book1->author;
        $book2 = new Book;
        $book2->title = 'Lord Of the Rings';
        $book2->author = 'Tolkien';
        $book2->pages = 700;
        echo "<br>";
        echo $book2->author;
    ?>
</body>
</html>