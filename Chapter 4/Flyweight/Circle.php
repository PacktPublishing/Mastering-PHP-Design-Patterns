<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 10:51
 */
class Circle implements Shape
{

    private $colour;
    private $x;
    private $y;
    private $radius;

    public function __construct(string $colour)
    {
        $this->colour = $colour;
    }

    public function setX(int $x)
    {
        $this->x = $x;
    }

    public function setY(int $y)
    {
        $this->y = $y;
    }

    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Drawing circle which is " . $this->colour . " at [" . $this->x . ", " . $this->y . "] of radius " . $this->radius . ".";
        echo "\n";
    }
}