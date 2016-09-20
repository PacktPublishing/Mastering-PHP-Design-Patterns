<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:05
 */

class Song implements Music
{
    public $id;
    public $name;

    public function  __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
    }

    public function play()
    {
        printf("Playing song #%s, %s.\n", $this->id, $this->name);
    }
}