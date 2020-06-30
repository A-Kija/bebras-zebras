<?php


class Stikline
{
    private $turis, $kiekis = 0;
    
    public function __construct(int $turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        $this->kiekis += $kiekis;
        $this->kiekis = min($this->turis, $this->kiekis);
        return $this;
    }

    public function ispilti()
    {
        $kiekis = $this->kiekis / 2;
        $this->kiekis = $this->kiekis / 2;
        return $kiekis;
    }


}