<?php

class Direction
{
    public $nome;
    public $cognome;
    public $nazionalita;

    function __construct($_nome, $_cognome, $_nazionalita)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->nazionalita = $_nazionalita;
    }

    public function getFullDirector()
    {

        return $this->nome . ' ' . $this->cognome . ', ' . $this->nazionalita;
    }
}
