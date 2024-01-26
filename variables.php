<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro to variables</title>
</head>

<body>
    <?php
    $characterName = "John";
    $characterAge = 35;

    echo ("There was once a man named $characterName <br>");
    echo ("He was $characterAge years old <br>");

    $characterName = "Mike";
    echo ("He liked the name $characterName <br>");
    echo ("But didn't like being $characterAge");

    echo strtolower($characterName);
    ?>
</body>

</html>