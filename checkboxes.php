<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkboxes</title>
</head>

<body>
    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
        <input type="submit">

        <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];

        ?>
</body>


</html>