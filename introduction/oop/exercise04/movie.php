<?php 
    class Movie {
        //The access/visibility modifiers are: public, private and protected.
        //public and var are interchangeable.
        public $name; //The same of 'var $name';
        private $rating;

        function __construct($name, $rating) {
            $this->name = $name;
            $this->setRating($rating);
            // $this->rating = $rating;
            //$rating can assume only: G, PG, PG-13, R and NR.
        }

        function getRating() {
            return $this->rating;
        }

        function setRating($rating) {
            $rating = strtoupper($rating);
            if ($rating != 'G' && $rating != 'PG' && $rating != 'PG-13' && $rating != 'R' && $rating != 'NR') {
                $rating = 'NR';
            }
            $this->rating = $rating;
        }
    }
?>