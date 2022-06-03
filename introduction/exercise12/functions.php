<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Functions</title>
</head>
<body>
    <?php 
        function sayHi() {
            echo "Hi <br>";
        }
        sayHi();
        function greet($username) {
            echo "Welcome $username! <br>";
        }
        greet('Rafael');
        greet('Mark');
        //Fruitful function: return statement.
        function cube($number) {
            return pow($number, 3);
        }
        function square($number) {
            return pow($number, 2);
        }
        echo cube(4);
        echo '<br>';
        echo square(4);
    ?>
</body>
</html>