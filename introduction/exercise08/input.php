<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST vs GET</title>
</head>
<body>
    <h1>POST is safer than GET for getting data from a form a user has filled out</h1>
    <form action="input.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit"> <br> 
    </form>
    
    <?php
        echo $_GET["password"]; //Not accessible through this method anymore.
        echo $_POST["password"];
        //The data entered into the form is not shown in the URL.
        //post is preferable instead of get when using forms.
    ?>
</body>
</html>