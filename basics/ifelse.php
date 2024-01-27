<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifelse</title>
</head>

<body>
    <?php
    function getMax($num1, $num2)
    {
        if ($num1 > $num2) {
            return $num1;
        } else if ($num1 < $num2) {
            return $num2;
        } else {
            echo ("they are equal");
        }
    }

    echo getMax(23, 34);
    ?>
</body>

</html>