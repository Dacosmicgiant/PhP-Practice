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

        //called whenever object is created
        /*function __construct($name)
        {
            echo "New book created\n";
            echo $name;
        }
        */

        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle; //this is keyword to access current object
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }



    $book1 = new Book("Harry Potter", "jk Rowling", 400);


    $book2 = new Book("Lord of the Rings", "Tolkien", 700);

    $book1->title = "Hobbit";
    echo $book1->title;

    ?>
</body>

</html>