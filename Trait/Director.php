<?php

trait Director{
    protected $director;

    function getDirector(){
        return $this->director;
    }
    function setDirector($director){
        $this->director = $director;
    }
}