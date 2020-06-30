<?php

class Pinigine
{
    private 
        $popieriniaiPinigai = [],
        $metaliniaiPinigai = [];


    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai[] = $kiekis;
        }
        else {
            $this->popieriniaiPinigai[] = $kiekis;
        }
        return $this;
    }

    public function skaiciuoti()
    {
        echo '<br>'. (array_sum($this->metaliniaiPinigai) + array_sum($this->popieriniaiPinigai)) . '<br>';
        echo '<br>METALAS: '. count($this->metaliniaiPinigai);
        echo '<br>POPIERIUS: '. count($this->popieriniaiPinigai);
    }
}