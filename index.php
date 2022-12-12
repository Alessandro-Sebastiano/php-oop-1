<?php

class Movie
{

    public $title;
    public $year;

    function __construct(string $_title, int $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }


    public function getTitle()
    {
        return $this->title;
    }
}


$first_movie = new Movie('Avatar', 2009);

var_dump($first_movie);

echo $first_movie->getTitle();


$second_movie = new Movie('The Irishman', 2019);

var_dump($second_movie);

echo $second_movie->getTitle();
