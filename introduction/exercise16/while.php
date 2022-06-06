<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using While Loops</title>
</head>
<body>
    <header>
        <h1>Using while loops inside PHP:</h1>
    </header>
    <br>
    <?php 
        $index = 1;
        while ($index <= 10) {
            echo "$index <br>";
            $index++;
        }
    ?>
</body>
</html>