<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:35
 */
class SMS implements Messenger
{
    public function send($body)
    {
        echo "SMS: " . $body;
    }
}