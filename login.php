<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST method</title>
</head>

<body>
    <form action="login.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>

    <?php
    echo $_POST["password"];
    ?>

</body>

</html>