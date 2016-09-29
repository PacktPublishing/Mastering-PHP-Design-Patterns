<?php

/**
 * Created by PhpStorm.
 * User: junade
 * Date: 17/06/2016
 * Time: 16:10
 */
class timeIterator implements IteratorAggregate
{

    public function __construct(int $time)
    {
        $this->weekAgo   = $time - 604800;
        $this->yesterday = $time - 86400;
        $this->now       = $time;
        $this->tomorrow  = $time + 86400;
        $this->nextWeek  = $time + 604800;
    }

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

$time = new timeIterator(time());

foreach ($time as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}