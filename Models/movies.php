<?php

require 'directors.php';

class Movie
{
    public $nome;
    public $data;
    public $descrizione;
    public $genres;
    public $director;

    function __construct($_nome, $_data, $_descrizione, $_genres, Direction $_director)
    {
        $this->nome = $_nome;
        $this->data = $_data;
        $this->descrizione = $_descrizione;
        $this->genres = $_genres;
        $this->director = $_director;
    }
};
