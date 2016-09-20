<?php
/**
 * User: Junade Ali
 * Date: 10/04/2016
 * Time: 13:06
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('Transmitter.php');
require_once('Device.php');
require_once('Phone.php');
require_once('Tablet.php');

require_once('Messenger.php');
require_once('SMS.php');
require_once('InstantMessenger.php');

$phone = new Phone();
$phone->setSender(new SMS());

$phone->send("Hello there!");