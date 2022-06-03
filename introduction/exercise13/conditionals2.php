<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Conditionals 2</title>
</head>
<body>
    <?php 
        function getMax($num1, $num2) {
            return $num1 >= $num2 ? $num1 : $num2; //Ternary operator
        }
        function getMax2($num1, $num2) {
            if ($num1 >= $num2) {
                return $num1;
            }
            return $num2;
        }
        echo getMax2(getMax2(getMax(987, 988), 1000), 9999);
        function maxOf3($num1, $num2, $num3) {
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }
        echo "<br>";
        echo maxOf3(5670, 100, 600);
    ?>
</body>
</html>