<?php
/**
 * User: Junade Ali
 * Date: 19/01/2016
 * Time: 09:54
 */

namespace IcyApril\ChapterOne;


class Cat extends Animal
{
    public function eat(string $food): bool
    {
        if ($food === "tuna") {
            return true;
        } else {
            return false;
        }
    }

    public function talk(bool $shout): string
    {
        if ($shout === true) {
            return "MEOW!";
        } else {
            return "Meow.";
        }
    }
}