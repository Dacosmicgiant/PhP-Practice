<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loops</title>
</head>

<body>
    <?php

    $index = 1;
    while ($index <= 5) {
        echo "$index <br>";
        $index++;
    }
    //this line prints 5 stars
    for ($i = 0; $i < 5; $i++) {
        echo "*";
    }
    ?>
</body>

</html>