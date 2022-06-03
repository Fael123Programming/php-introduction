<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
    Number 1: <input type="number" step="0.01" name="num1"> <br> <!--decimal numbers with up to 2 decimal places-->
    Operator: <input type="text" name="op"> <br>
    Number 2: <input type="number" step="0.01" name="num2"> <br>
    <input type="submit"> <br>
    </form>
    <?php 
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
        if ($op == '+') {
            echo $num1 + $num2;
        } elseif ($op == '-') {
            echo $num1 - $num2;
        } elseif ($op == '*') {
            echo $num1 * $num2;
        } elseif ($op == '/') {
            if ($num2 == 0) {
                echo "Cannot divide $num1 by 0";
            } else {
                echo $num1 / $num2;
            }
        } else {
            echo "Invalid operator: $op";
        }
    ?>
</body>
</html>