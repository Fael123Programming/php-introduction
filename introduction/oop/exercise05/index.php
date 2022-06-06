<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance in PHP</title>
</head>
<body>
    <?php 
        include 'chef.php';
        $chef = new Chef();
        $chef->makeChicken();
        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish();
        $italianChef->makePasta();
    ?>
</body>
</html>