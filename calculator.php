<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
</head>

<body>
    <form action="calculator.php" method="get">
        num1: <input type="number" name="num1">
        <br>
        num2: <input type="number" name="num2">
        <input type="submit">

    <?php echo $GET["num1"]+ $GET["num2"]
</body>

</html>