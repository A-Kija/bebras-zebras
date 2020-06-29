<?php

class Pinigine
{
    private 
        $popieriniaiPinigai = 0,
        $metaliniaiPinigai = 0;


    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai = $this->metaliniaiPinigai + $kiekis;
        }
        else {
            $this->popieriniaiPinigai = $this->popieriniaiPinigai + $kiekis;
        }
        return $this;
    }

    public function skaiciuoti()
    {
        echo '<br>'. ($this->metaliniaiPinigai + $this->popieriniaiPinigai) . '<br>';
    }
}