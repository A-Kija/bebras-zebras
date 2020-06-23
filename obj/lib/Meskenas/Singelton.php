<?php
namespace Grazus\Meskenas;



class Singelton
{


    public $shop = [];

    static private $obj;

    const MESKENAS = 'grazus';

    static public function make()
    {
        return self::$obj ?? self::$obj = new self;
    }


    private function __construct()
    {

    }

    private function __clone(){}

    private function __sleep(){}


}