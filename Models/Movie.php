<?php


class Movie
{

    public $title;
    public $year;
    public $type;

    function __construct(string $_title, int $_year, string $_type)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->type = $_type;
    }


    public function getTitle()
    {
        echo $this->title . ' ';
        echo $this->year . ' ';
        echo $this->type . ' ';
    }
}
