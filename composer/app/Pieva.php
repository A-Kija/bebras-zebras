<?php
namespace App\DB;

class Pieva
{
    public $varliuKiekis;
    
    public function __construct($varliuKiekis)
    {
        $this->varliuKiekis = $varliuKiekis;
    }
}