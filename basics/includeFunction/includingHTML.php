<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>including HTML</title>
</head>
<?php // use this to have same html for header and footer for every page
//you can also use it to include different predefined html files
?>

<body>
    <?php include("header.html"); ?>
    <p>helloWorld</p>
    <?php include("footer.html"); ?>
</body>

</html>