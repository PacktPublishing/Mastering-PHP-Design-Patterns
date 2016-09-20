<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:31
 */
interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send($body);
}