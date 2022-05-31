<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <?php 
        $data = array("Kevin", "Karen", "Oscar", "Jim", 4);
        echo $data; //Array
        echo "<br>";
        echo $data[0]; //First element...
        $data[1] = 4.567;
        echo "<br>";
        echo $data[1];
    ?>    
</body>
</html>