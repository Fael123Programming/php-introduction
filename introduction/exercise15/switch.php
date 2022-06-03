<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Switch</title>
</head>
<body>
    <form action="switch.php" method="post">
        What was your grade? <br>
        <input type="text" name="grade"> <br>
        <input type="submit">
    </form>
    <?php 
        $grade = $_POST['grade'];
        switch (strtoupper($grade[0])) {
            case 'A': 
                echo "You did amazing!";
                break;
            case 'B':
                echo 'You did pretty good!';
                break;
            case 'C':
                echo 'You did poorly!';
                break;
            case 'D':
                echo 'You did very bad!';
                break;
            case 'F':
                echo 'You fail!';
                break;
            default:
                echo "$grade is not a valid grade";
        }
    ?> 
</body>
</html>