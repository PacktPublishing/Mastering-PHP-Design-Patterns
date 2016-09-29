<?php

/**
 * User: Junade Ali
 * Date: 23/05/2016
 * Time: 13:08
 */
class Reader implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name . ' is reading the article ' . $subject->getContent() . ' ';
    }
}