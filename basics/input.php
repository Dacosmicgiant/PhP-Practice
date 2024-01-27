<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user input through forms</title>
</head>

<body>

    <form action="input.php" method="get">
        Name: <input type="text" name="name">
        Age: <input type="number" name="age">

        <input type="submit" value="visit">
    </form>
    <br>
    Your name is:
    <?php echo $_GET["name"]; ?>
    <br>
    Your age is:
    <?php echo $_GET["age"]; ?>

</body>

</html>