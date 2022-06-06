<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
</head>
<body>
    <?php 
        include 'student.php';
        $st1 = new Student('Pedro Stones', 'Computing Science', 3);
        echo $st1->hasHonors();
        echo "<br>";
        if ($st1->hasHonors()) {
            echo "$st1->name has honors!";
        } else {
            echo "$st1->name hasn't honors!";
        }
    ?>
</body>
</html>