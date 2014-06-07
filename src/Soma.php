<?php
/**
 * Created by PhpStorm.
 * User: nando
 * Date: 06/06/14
 * Time: 21:32
 */

class Sum {

    private $numberOne;
    private $numberTwo;

    public function setNumberOne($numberOne)
    {

        $this->numberOne = $numberOne;
    }

    public function setNumberTwo($numberTwo)
    {

        $this->numberTwo = $numberTwo;
    }

    public function getNumberOne()
    {
        return $this->numberOne;
    }

    public function getNumberTwo()
    {
        return $this->numberTwo;
    }

    public function resultSum()
    {
        return $this->numberOne + $this->numberTwo;
    }

}