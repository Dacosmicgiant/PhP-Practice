<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>

<body>
    <?php
    //custom data types are classes in php
    class Book
    {
        var $title;
        var $author;
        var $pages;

    }

    $book1 = new Book();

    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    ?>
</body>

</html>