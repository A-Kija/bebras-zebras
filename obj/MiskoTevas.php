<?php

class MiskoTevas 
{
    protected $vardas = 'Jonas';

    protected function __construct(...$params)
    {
        
        echo 'Tevo';
        
        // if (count($params) == 1) {
        //     $this->one(...$params);
        // }
        // if (count($params) == 2) {
        //     $this->two(...$params);
        // }
    }
}