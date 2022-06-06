<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using FOR</title>
</head>
<body>
    <?php 
        for ($index = 0; $index < 10; $index++) {
            echo "$index <br>";
        }
        $students = array('Josh', 'Eduard', 'Mark', 'Marianna');
        for ($i = 0; $i < count($students); $i++) {
            echo "Student: $students[$i] <br>";
        }
    ?>
</body>
</html>