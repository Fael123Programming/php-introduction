<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Conditionals</title>
</head>
<body>
    <?php 
        $isMale = false;
        $isTall = true;
        if ($isMale && $isTall) { //Logic AND operator: &&, logic OR operator: ||
            echo "You are a tall male";
        } elseif ($isMale && !$isTall) { //Logic NOT operator: !
            echo "You are a little male";
        } elseif (!$isMale && $isTall) {
            echo "You are a tall woman";
        } else {
            echo "You are a little woman";
        } 
        //elseif
    ?>
</body>
</html>