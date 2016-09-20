<?php

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 04:39
 */
class SFToyFactory implements ToyFactory
{
    private $location = "San Francisco";

    public function makeMaze()
    {
        return new Toys\SFMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\SFPuzzleToy;
    }
}