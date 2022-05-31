<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters</title>
</head>
<body>
    <form action="site.php" method="get">
        Name: <input type="text" name="userName">
        <input type="submit">
    </form>

    <?php
        echo $_GET["userName"];
        echo "<br>";
        echo $_GET["userAge"];
        echo "<br>";
        echo $_GET["userGender"];
        //Data may be stored inside an URL.
    ?>
    
</body>
</html>