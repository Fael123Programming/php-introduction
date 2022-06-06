<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
</head>
<body>
    <?php 
        include 'book.php';
        $bk1 = new Book('My first book', 'me', 1200);
        $bk2 = new Book('My second book', 'unknown', 500);
        echo $bk1->title; //Do not use '$'.
        echo "<br>";
        echo $bk1->author;
        echo "<br>";
        echo $bk1->pages;
        echo "<br>";
        $bk1->author = "It's not me anymore";
        echo $bk1->author;
    ?>
</body>
</html>