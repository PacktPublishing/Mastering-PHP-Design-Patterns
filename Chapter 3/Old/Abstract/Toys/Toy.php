<?php

/**
 * User: Junade Ali
 * Date: 20/03/2016
 * Time: 04:41
 */

namespace Toys;

abstract class Toy
{
    abstract public function getSize(): int;
    abstract public function getPictureName(): string;
}