<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started With Numbers in PHP</title>
</head>
<body>
    <?php
        echo "<h1> Let us learn how to handle numbers in PHP</h1>";
        $integer = -34;
        $decimal = 7.8912;
        echo "Flake had marked $integer Celsius for the temperature at his home";
        echo "<br>";
        echo "That shot passed $decimal centimeters away from the target";
        echo "<br>";
        echo 17 + -34;
        echo "<br>";
        echo "All PHP arithmatic operators are the same of every programming language!";
        echo "<br>";
        echo "As so, the order of operators are also the same"; 
        echo "<br>";
        echo $integer * -4;
        //post and pre increments are done like C-like languages.
        echo "<br>";
        echo ++$integer;
        $integer += 34;
        echo "<br>";
        echo $integer;
        //They are shorthands for the common syntax of arithmatic operations.
        echo "<br>";
        //There are some functions to use to calculate more complex math operations.
        echo sqrt(100);
        echo "<br>";
        echo abs(-100);
        echo "<br>";
        echo pow(2, 8);
        echo "<br>";
        echo max(1, 10, 5, 100, 900, 500);
        echo "<br>";
        echo min(1, 10, 5, 100, 900, 500);
        echo "<br>";
        echo round($decimal, 2); //round to 2 places.
        echo "<br>";
        echo ceil($decimal);
        echo "<br>";
        echo floor($decimal);
        echo "<br>";
    ?>
</body>
</html>