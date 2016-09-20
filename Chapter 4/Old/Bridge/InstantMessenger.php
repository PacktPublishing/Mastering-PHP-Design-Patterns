<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:35
 */
class InstantMessenger implements Messenger
{
    public function send($body)
    {
        echo "InstantMessenger: " . $body;
    }
}