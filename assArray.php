<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dictionaries</title>
</head>

<body>

    <form>
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
    $grades = array("Jim" => "A+", "Tim" => "A", "Harry" => "B-");
    $Student = $_POST["student"];
    echo $grades[$Student];
    ?>
</body>

</html>