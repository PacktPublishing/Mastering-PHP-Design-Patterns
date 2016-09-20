<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 19:01
 */

namespace Toys;


class UKMazeToy extends Toy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = "London Maze";
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->pictureName;
    }
}