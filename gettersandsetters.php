<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters And Setters</title>
</head>
<body>

<?php

class Movie {

    public $title;
    private $rating;

    function __construct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating(){
        return $this -> rating;
    }

    function setRating($rating){
        if($rating == "PG-13" || $rating == "G" || $rating == "R" || $rating == "NR" || $rating == "PG"){
            return $this -> rating = $rating;
        }else {
            return $this -> rating = "NR";
        }
    }

}
$avengers = new Movie("Avengers","DOG");
 $avengers->setRating("PG");
echo $avengers->getRating();

?>
    
</body>
</html>