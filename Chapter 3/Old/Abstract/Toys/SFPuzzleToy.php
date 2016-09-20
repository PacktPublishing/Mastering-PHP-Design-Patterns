<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 19:58
 */

namespace Toys;


class SFPuzzleToy extends PuzzleToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $rand = rand(1, 3);

        switch ($rand) {
            case 1:
                $this->size = 3;
                break;
            case 2:
                $this->size = 6;
                break;
            case 3:
                $this->size = 9;
                break;
        }

        $this->pictureName = "San Francisco Puzzle";
    }

    public
    function getSize(): int
    {
        return $this->size;
    }

    public
    function getPictureName(): string
    {
        return $this->pictureName;
    }
}