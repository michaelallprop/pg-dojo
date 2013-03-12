<?php

namespace Dojo;

class Calculator
{

    public $total = 0;

    public function enter()
    {

    }

    public function add($number)
    {
        $this->total += $number;
    }

    public function display()
    {
        return $this->total;
    }
}
