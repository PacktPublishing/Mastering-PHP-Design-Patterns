<?php
/**
 * User: Junade Ali
 * Date: 23/05/2016
 * Time: 15:37
 */

function squaredNumbers(int $start, int $end): Generator
{
    for ($i = $start; $i <= $end; ++$i) {
        yield $i => pow($i, 2);
    }
}

foreach (squaredNumbers(1, 5) as $key => $number) {
    var_dump([$key, $number]);
}