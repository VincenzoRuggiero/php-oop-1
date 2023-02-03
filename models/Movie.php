<?php 

    class Movie {
        public $title;
        public $genre;
        public $year;
        public $isWidescreen = "True";

        public function __construct($title, Genres $genre, $year)
        {
            $this->title = $title;  
            $this->genre =$genre;
            $this->year = $year;
        }

        //Funzione che verifica se un film è in formato 16:9 in base all'anno d'uscita
        public function printFormat() {
            if($this->year < 2000){
                return $this->isWidescreen = "False";
            } else {
                return $this->isWidescreen;
            }
        }
        

        // Funzione che visualizza i generi del film presenti in una Classe con attributo di tipo array associativo
        public function printGenres(){
            $str = '';
            foreach($this->genre as $key => $value){
                $str .= $value . " ";
            }
            return $str;
        }
    }

?>  