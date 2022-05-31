<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Lib Game</title>
</head>
<body>
    <form action="input.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit"> <br>
    </form>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "<p>
            Roses are $color<br>$pluralNoun are blue<br>I love $celebrity
            </p>";
    ?>
</body>
</html>