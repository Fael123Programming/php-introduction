<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Associative Arrays</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        Student's name: <input type="text" name="student_name"> <br>
        <input type="submit"> <br>
    </form>
    <?php 
        //Associative arrays are like dictionaries or maps of other languages.
        $grades = array("Jim" => "A+", "Mike" => "B-", "Josh" => "C+", "Andressa" => "A-");
        echo $grades[$_POST["student_name"]];
        //echo count($grades);
    ?>
</body>
</html>