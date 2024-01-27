<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
</head>

<body>
    <?php
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall) {

        echo "You are male";
    } else
        echo "You are female";

    if ($isMale || $isTall) {

        echo "You are male";
    } else
        echo "You are female";



    ?>
</body>

</html>