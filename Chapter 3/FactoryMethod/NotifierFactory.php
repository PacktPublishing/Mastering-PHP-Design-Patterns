<?php

/**
 * User: Junade Ali
 * Date: 13/03/2016
 * Time: 13:55
 */
interface NotifierFactory
{
    public static function getNotifier($notifier, $to);
}