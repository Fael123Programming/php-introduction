<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started With PHP</title>
</head>
<body>
    <h1>Hello, PHP: PHP Hypertext Preprocessor</h1>
    <?php
        echo("Hello world!"); //Output one or more strings or even HTML tags.
        echo "<br>";
        echo "Another way of doing that";
        echo "<hr>";
        echo "<h2>Are your prepared for conquering the world of programming?</h2>";
        //Variables and data types.
        //All variables come with a '$' as first character.
        $authorName = 'John'; //string
        $authorAge = 16; //integer
        echo "<br>";
        echo "<p>$authorName was $authorAge years old when he started learning PHP</p>";
        //PHP is dynamic typed likewise Python, Dart, Ruby, and other languages.
        echo "<h2>The primitive data types of PHP are:</h2><br>";
        echo "<ul>
            <li>string</li>
            <li>integer</li>
            <li>floating-point number (decimal)</li>
            <li>boolean (logic)</li>
        </ul>";
        $string = 'a string may be represented in double quotes or simple quotes';
        $integer = 10;
        $decimal = 3.14;
        $logic = true; //false is the other value it may assume.
        //'null' does exist in PHP.
        $user_logged_int = null;
        echo $string;
        echo "<br>";
        echo $integer;
        echo "<br>";
        echo $decimal;
        echo "<br>";
        echo $logic;
        echo "<br>";
        $logic = false;
        echo $logic;
        echo "<br>";
        echo "-> Current user: ($user_logged_in)";
        //To put variables inside strings must be performed using double quotes.
        $isMale = true;
        if ($isMale) {
            echo "<p>The author is male</p>";
        } else {
            echo "<p> The author is male does not matter what you do!</p>";
        }
    ?>
</body>
</html>