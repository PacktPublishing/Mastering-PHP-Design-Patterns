<?php

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 21:29
 */
class Email extends Notifier
{

    private $from;

    public function __construct($to, $from)
    {
        parent::__construct($to);

        if (isset($from)) {
            $this->from = $from;
        } else {
            $this->from = "Anonymous";
        }
    }

    public function validateTo(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);

        return $isEmail ? true : false;

    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === false) {
            throw new Exception("Invalid email address.");
        }

        $notificationType = get_class($this);
        return "This is a " . $notificationType . " to " . $this->to . " from " . $this->from . ".";
    }
}