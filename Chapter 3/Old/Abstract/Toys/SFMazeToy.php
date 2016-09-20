<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 18:55
 */

namespace Toys;


class SFMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 9;
        $this->pictureName = "San Francisco Maze";
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