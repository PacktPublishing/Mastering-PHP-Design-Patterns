<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:32
 */
abstract class Device implements Transmitter
{
    protected $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender = $sender;
    }
}