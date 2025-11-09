<?php

class Movie{
        public $name;
        public $targetMovieAge;
        public $price;
        protected $genre;

        use Director;

        function getGenreNames(){
            return $this->genre->getGenre();
        }

        function __construct($name, $targetMovieAge, Genre $genre, $price){
            $this->name = $name;
            $this->targetMovieAge;
            $this->genre = $genre;
            $this->price = $price;
        }

        public function seeTargetMovieAge(){
            if($this->targetMovieAge < 12){
                return "Bambini";
            }
            elseif($this->targetMovieAge < 18){
                return "Ragazzi";
            }
            else{
                return "Adulti";
            }
        }

    }