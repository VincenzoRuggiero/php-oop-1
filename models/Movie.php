<?php 

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $format = "16:9";

        public function __construct($title, $genre, $year)
        {
            $this->title = $title;  
            $this->genre =$genre;
            $this->year = $year;
        }

        public function printFormat() {
            return $this->format;
        }
    }


$film1 = new Movie("Avatar", "Fantasy", 2023);
$film2 = new Movie("Bullet Train", "Action", 2022);
var_dump($film1, $film2);
?>  