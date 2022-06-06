<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>
<body>
    <h1>Control the access to the attributes an instance has</h1>
    <?php 
        include 'movie.php';
        $mv1 = new Movie('Avengers: End Game', 'PG-13');
        $mv1->setRating('whatever');
        echo $mv1->getRating();
    ?>
</body>
</html>