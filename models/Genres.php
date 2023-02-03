<?php 
    class Genres
    {
        public $first; //Primo genere
        public $second; //Secondo genere

        public function __construct($first, $second)
        {
            $this->first = $first;
            $this->second = $second;
        }

    }
?>