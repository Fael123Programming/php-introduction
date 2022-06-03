<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <!--To access a PHP file like this one go to a web browser and type:-->
    <!--http://localhost:<port>/<path_since_user_dir>/arrays.php-->
    <?php 
        $data = array("Kevin", "Karen", "Oscar", "Jim", 4);
        echo $data; //Array
        echo "<br>";
        echo $data[0]; //First element...
        $data[1] = 4.567; //Multiple data types my be used meanwhile...
        echo "<br>";
        echo $data[1];
        echo "<br>";
        $data[5] = "new data"; //The position 5 does not exist so far... we are creating it!
        echo $data[5];
        echo "<br>";
        echo count($data);
    ?>    
</body>
</html>