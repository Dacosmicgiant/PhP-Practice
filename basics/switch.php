<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
</head>

<body>
    <form action="switch.php" method="post">
        <input type="text" name="name">
        <input type="text" name="grade">
        <input type="submit" value="result">
    </form>

    <?php
    $name = $_POST["name"];
    $grade = $_POST["grade"];

    switch ($grade) {
        case "A":
            echo "You did amazing";
            break;
        case "B":
            echo "Great";
            break;

        case "C":
            echo "Can do better";
            break;
    }


    ?>
</body>

</html>