<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using include in a more sophisticated way</title>
</head>
<body>
    <?php 
        include 'useful-tools.php';
        //All functions and variables in useful-tools.php will be available for use here.
        greet('Linus Torvalds');
        greet($constantValue);
    ?>
</body>
</html>