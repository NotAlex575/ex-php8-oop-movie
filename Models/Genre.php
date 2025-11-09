<?php    
    class Genre{
        protected $genre1;
        protected $genre2;
        
        function __construct($genre1, $genre2){
            $this->genre1 = $genre1;
            $this->genre2 = $genre2;
        }

        function getGenre(){
            return $this->genre1.", ".$this->genre2;
        }
    }