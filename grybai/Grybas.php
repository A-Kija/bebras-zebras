<?php

class Grybas
{
    private $valgomas, $sukirmijes, $svoris;


    public function __construct()
    {
        $this->valgomas = rand(0, 100) > 90 ? false : true;
        $this->sukirmijes = rand(0, 100) > 10 ? false : true;
        $this->svoris = rand(3, 3);
    }

    public function __get($prop)
    {
        if (in_array($prop, ['valgomas', 'sukirmijes', 'svoris'])) {
            return $this->$prop;
        }
        return null; // nereikia, tiesiog del aiskumo parasiau
    }
}