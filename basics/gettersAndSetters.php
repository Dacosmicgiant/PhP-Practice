<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>

<body>
    <?php
    class Movie
    {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            //$this->rating = $rating;
            //return $this->rating;
    
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
            return $this->rating;

        }
    }

    $avengers = new Movie("Avengers", "PG-13");
    //now there only these valid ratings: "G,PG,PG-13,R,NR"
    //we want user to enter only one of this
    echo $avengers->getRating();

    echo $avengers->setRating("Dogshit");
    ?>
</body>

</html>