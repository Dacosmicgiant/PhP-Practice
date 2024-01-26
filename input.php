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

        <input type="submit" value="visit">
    </form>
    <br>

    <?php
    echo $_GET["name"] ?>

</body>

</html>