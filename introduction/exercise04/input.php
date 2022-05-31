<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Started With PHP User Input</title>
</head>
<body>
    <h1>Fill out the form below</h1>
    <form action="input.php" method="get"> 
        Name:&nbsp; <input type="text" name="userName"> <br>
        Age:&nbsp;<input type="number" name="userAge"><br>
        <input type="submit"><br>
    </form>
    Your name is <?php echo $_GET["userName"]?> <br>
    You are <?php echo $_GET["userAge"]?> years old
</body>
</html>