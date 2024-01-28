<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <?php
    class Chef
    {
        function makeChicken()
        {
            echo "the chef makes chicken <br>";
        }
        function makeSalad()
        {
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish()
        {
            echo "The chef makes bbq ribs";
        }

    }

    class ItalianChef extends Chef
    {
        function makePasta()
        {
            echo "The chef makes pasta<br>";
        }

        function makeSpecialDish()
        { //function overriding
            echo "The chef makes chicken parm";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $italianChef = new ItalianChef();
    $italianChef->makePasta();
    $italianChef->makeChicken();

    $italianChef->makeSpecialDish();
    $chef->makeSpecialDish();

    ?>
</body>

</html>