<?php

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 14:25
 */
abstract class Notifier
{
    protected $to;

    public function __construct(string $to)
    {
        $this->to = $to;
    }

    abstract public function validateTo(): bool;

    abstract public function sendNotification(): string;

}