<?php
/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 20:02
 */

namespace Toys;


class UKPuzzleToy extends PuzzleToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $rand = rand(1, 2);

        switch ($rand) {
            case 1:
                $this->size = 3;
                break;
            case 2:
                $this->size = 9;
                break;
        }

        $this->pictureName = "London Puzzle";
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