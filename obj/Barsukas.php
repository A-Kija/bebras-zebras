<?php

class Barsukas extends MiskoTevas implements Miskas
{
    public $kailis = 'juodas';
    private $akiuSkaicius = 2;



    public function __construct(...$params)
    {
        // MiskoTevas::__construct(...$params);

        // echo MiskoTevas::$vardas;
        
        echo 'Barsuko';
        
        // if (count($params) == 1) {
        //     $this->one(...$params);
        // }
        // if (count($params) == 2) {
        //     $this->two(...$params);
        // }
    }

    public function __clone()
    {
        echo 'BBBBBB';
    }

    public function __call($name, $arguments) 
    {
        echo $name;
    }

    public function __set($name, $params)
    {

            return $this->balsas();


    }


    public function one(...$params)
    {
        $this->kailis = $params[0];
    }


    public function two(...$params)
    {
        $this->akiuSkaicius = $params[1];
    }



    public function balsas()
    {
        echo '<br><br><br>Bar Bar<br><br><br>';
        return $this;
    }


    public function setAkiuSkaicius($akiuSkaicius = 2)
    {
        if ($akiuSkaicius > 2) {
            echo '<br><br><br>BLOGAI!<br><br><br>';
            return;
        }
        $this->akiuSkaicius = $akiuSkaicius;
    }


    public function getAkiuSkaicius()
    {
        return $this->akiuSkaicius;
    }


    public function grybai(int $skaicius) : array
    {
        echo 'Grybai';
        return [];
    }









}