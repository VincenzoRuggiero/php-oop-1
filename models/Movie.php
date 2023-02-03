<?php 

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $isWidescreen = "True";

        public function __construct($title, $genre, $year)
        {
            $this->title = $title;  
            $this->genre =$genre;
            $this->year = $year;
        }

        public function printFormat() {
            if($this->year < 2000){
                return $this->isWidescreen = "False";
            } else {
                return $this->isWidescreen;
            }
        }
    }

?>  