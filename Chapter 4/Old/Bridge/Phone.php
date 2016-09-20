<?php

/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:33
 */
class Phone extends Device
{
    public function send($body)
    {
        $body .= "\n\n Sent from a phone.";

        return $this->sender->send($body);
    }
}