<?php

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 04:34
 */
class UKToyFactory implements ToyFactory
{
    private $location = "United Kingdom";

    public function makeMaze()
    {
        return new Toys\UKMazeToy;
    }

    public function makePuzzle()
    {
        return new Toys\UKPuzzleToy;
    }
}