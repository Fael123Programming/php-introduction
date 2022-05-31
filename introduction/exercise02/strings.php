<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started With strings in PHP</title>
</head>
<body>
    <?php
        echo "<h1>Let us manipulate some strings in PHP way</h1>";
        $string = "STRING 1 EXAMPLE";
        $string2 = "string 2 example";
        echo strtolower($string);
        echo "<br>";
        echo strtoupper($string2);
        echo "<br>";
        $country = "Brazil";
        $letters = strlen($country);
        echo "$country has $letters letters";
        echo "<br>";
        $index = 5;
        echo "The letter at index $index is $country[$index]";
        //In PHP, strings are not unmodifiable!
        $country[0] = "F";
        $country[2] = "e";
        $country[3] = "n";
        $country[4] = "c";
        $country[5] = "h";
        echo "<br>";
        echo "It turned to $country";
        echo "<br>";
        echo str_replace("STRING 1", "My first", $string); //old, new, target
        echo "<br>";
        echo substr("Throughout", 0, 7); //get 7 chars counting from that one at position 0
    ?>
</body>
</html>